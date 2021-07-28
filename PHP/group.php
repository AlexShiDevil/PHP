<?php


 class Group
{
    private $name = "";
    private $list_teams = [];


    public function __construct(string $name, Group $groups=NULL)
    {
        if($groups != NULL)
            $this->list_teams = $groups->list_teams;


        return $this->name = $name;
    }
    
    public function addTeam(Team $team)
    {
        $this->list_teams[] = $team;

        return $this;

    }

    function printRaunds($k, $j=0){
        print ($this->list_teams[$j]->printTeam());
        print (" - ");
        print ($this->list_teams[$k]->printTeam() . "\n");
    }
    
    public function generateCalendar()
    {
        $elements = count($this->list_teams); // колво элементов в массиве
        $plays=0;
        $raunds=0;

        if($elements % 2 === 0) //Чётное
        {
            $plays = $elements / 2; // по n игр в рауеде
            $raunds = $elements - 1; // раундов
        } else //Нечётное
            {
                $plays = ($elements-1) / 2; // по n игр в рауеде
                $raunds = $elements; // раундов
                $elements-=1;
            }

            $x = 1;

            $k = $elements - 1;
            $n = 1;

            while ($raunds) {
                print($this->name . ". Raund $x" . "\n");

                for ($j = 0; $j < $plays; $j++) {
                    if ($j === 0) { //если это начало игры, в раунде то
                        Group::printRaunds($k); //
                        $k--;
                    } else {
                        if ($k < 1)
                            $k = $elements-1; //переходим на конц массива
                        if ($n > $elements - 1)
                            //$k++;
                            $n = 0+2; //Переходим на начала массива + мимо 2 команд)
                        Group::printRaunds($k, $n);
                        $n++;
                        $k--;
                    }
                }
                $raunds--;
                $x++;
                if ($n > $elements - 1) {
                    $k++;
                    $n = 0+2; //Переходим на начала массива + мимо 2 команд
                } else {
                    $k++;
                    $n++;
                }
            }
    }
}
