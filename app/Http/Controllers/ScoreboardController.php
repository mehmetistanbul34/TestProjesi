<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\GameOverModel;
use \App\GameModel;
use \App\GamerModel;

class ScoreboardController extends Controller
{
    private function getGameUnique($arr)
    {
        $resultArr = array();
        foreach($arr as $item)
        {
            $conditionAdd = true;
            if(array_search($item->game_id,$resultArr))
            {
                $conditionAdd = false;
            }
            
            if($conditionAdd)
            {
                array_push($resultArr,$item->game_id);
            }
        }
        return $resultArr;
    }

    private function getUserUnique($arr)
    {
        $resultArr = array();
        foreach($arr as $item)
        {
            $conditionAdd = true;
            if(array_search($item->gamer_id,$resultArr))
            {
                $conditionAdd = false;
            }

            if($conditionAdd)
            {
                array_push($resultArr,$item->gamer_id);
            }
        }
        return $resultArr;
    }

    public function getGames()
    {
        $result = '{"out":[';
        $nowDate = date('Y-m-d');
        $activeGames = GameOverModel::all()->where('start_date','<=',$nowDate)->where('finish_date','==',NULL);
        $gameUnique = $this->getGameUnique($activeGames);
        for($i=0;$i<count($gameUnique);$i++)
        {
            $item = $gameUnique[$i];
            $sqlGameOver = GameOverModel::all()->where('game_id','=',$item);
            $uniqueUsers = $this->getUserUnique($sqlGameOver);
            $sqlGame = GameModel::all()->where('id','=',$item)->first();
            $result .='<br>{"id" : "'.$item.'","title":"'.$sqlGame->title.'","unique_users":"'.count($uniqueUsers).'","total_play_count":"'.$sqlGameOver->count().'"}';
            if($i!=(count($gameUnique)-1))
            {
                $result .=",<br>";
            }
            else
            {
                $result .="<br>";
            }
        }
        $result .="]}";
        return $result;
    }

    public function scoreboardTahtasi()
    {  
        $GOM=GameOverModel::all()->where('finish_date','!=',null)->sortByDesc('score')->unique('game_id');
        foreach($GOM as $gom)
        {
            $GRM=GamerModel::all()->where('id','=',$gom->gamer_id)->first();
            $GM=GameModel::all()->where('id','=',$gom->game_id)->first();
            echo $GM->title." oynunun Maxsimum scoru = ".$gom->score."'dur.<br>";
        }
    }
 
    public function getScoreboard($gameId)
    {
        $result = '{"out":['; 
        $sqlGameOver=GameOverModel::all()->where('game_id','=',$gameId)->where('finish_date','!=',null)->unique('gamer_id')->sortByDesc('score');
        $i=0;
        foreach($sqlGameOver as $dene)
        {
            $i++;
            $result .='<br>{"user_id" : "'.$dene->gamer_id.'","score":"'.$dene->score.'","rank" : "'.$i.'"}';
        }
        $result .="<br>]}";
        return $result;
    }

    public function addScore($gameId,$userId,$score)
    {
        $nowDate = date('Y-m-d');
        //benim en yüksek puanımı getiriyor.
        $oldMyGames = GameOverModel::all()->where('gamer_id','=',$userId)->where('game_id','=',$gameId)->sortByDesc('score')->first();
        if(empty($oldMyGames))
        {
            return "Bu oyun bitmiş bir oyundur. Bitmiş bir oynu tekrar bitirmenin bir anlamı yok.";
        }

        //benim en yüksek puanım ile birlikte benden daha yüksek puana sahip bitmiş oyunları getiriyor.
        $oldGames = GameOverModel::all()->where('start_date','<=',$nowDate)->where('finish_date','!=',NULL)->where('score','>',$oldMyGames->score); 
        if(!empty($oldGames))
        {
            $result = '{"out":[';
            $result .= '{"old_rank":'.(count($oldGames)+1).',';
        }
        else
        {
            //Buraya log dosyasını log yazılması gerekiyor.
        }
        
        //Benim şu anda oynadığım aktif oynumun bitmesiyle beraber databasedeki puan ve bitiş zamanınını güncelliyorum.
        $activeGames = GameOverModel::all()->where('start_date','<=',$nowDate)->where('finish_date','==',NULL)->where('gamer_id',"=",$userId)->where('game_id',"=",$gameId)->first();
        if(!empty($activeGames))
        {
            $activeGames->score = $score;
            $activeGames->finish_date = $nowDate;
            $activeGames->save();
        }
        else
        {
            return "Bu oyun bitmiş bir oyundur. Bitmiş bir oynu tekrar bitirmenin bir anlamı yok <br>Sadece devam eden bir oynu bitirebilirsin<br>Yani \"finish_date==NULL\" olan bir kayıt göndermelisin !!!";
        }
        
        // yeni score listesini getiriyorum. 
        $currentGames = GameOverModel::all()->where('start_date','<=',$nowDate)->where('finish_date','!=',NULL)->where('score','>',$score);
        if(!empty($oldGames) && !empty($currentGames))
        {
            $result .= '"new_rank":'.(count($currentGames)+1).',';
            //eski score listesi ile yeni score listemi karşılaştırıyorum. 
            //eski score listemde olan fakat yeni score listemde olmayan kullanıcıları geçmişim manasına geliyor.
            $myPassedOtherUser = array();
            $result .= '"sweep":[';
            foreach($oldGames as $oldItem)
            {
                $isThere = false;
                foreach($currentGames as $currentItem)
                {
                    if($oldItem->gamer_id == $currentItem->gamer_id)
                        $isThere = true;
                }

                if(!$isThere)
                {
                    if(empty($myPassedOtherUser) && $oldItem->gamer_id != $gameId)
                    {
                        array_push($myPassedOtherUser,$oldItem->gamer_id);
                        //$result .= -2;    //dibaglarım
                    }
                    else
                    {
                        if(!(array_search($oldItem->gamer_id,$myPassedOtherUser)) && $oldItem->gamer_id != $gameId)
                        {
                            //$result .= -1;    //dibaglarım
                            array_push($myPassedOtherUser,$oldItem->gamer_id);
                        }
                    }
                }
            }
            
            foreach($myPassedOtherUser as $ekle)
            {
                $result .= $ekle.","; 
            }
        }
        $result .="]}]}";
        return $result;
    }
}
