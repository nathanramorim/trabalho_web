<?php

/**
* DATABASE CLASS FACTORY
*/



class Model
{
    // these variables can't used by other class
	private $pdo;

	function __construct()
	{

	}

    #this function connect in database and return a conection
    public static function connect()
    {

        $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PW,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $pdo;
    }



    public function selectData($table)
    {
        switch ($table) {
            case 'veiculos':
                $pdo = $this->connect();
                $consulta = $pdo->query("SELECT ans_code, name FROM operator");

                while ($row = $consulta->fetch(PDO::FETCH_ASSOC)):
                    echo '<option value="'.$row['ans_code'].'">'.$row['ans_code'].' - '.$row['name'].'</option>';
                endwhile;

                break;

            default:
                # code...
                break;
        }
    }

    public function insertData($table, $data)
    {
        #get a table for insert $data
        #$data is a object of some class
        #$table is a table relative on the database
        switch ($table) {
            case 'users':
                #created a object of conection on database in the var $pdo
                $pdo = $this->connect();

                #this is a query for insert data on database
                $query = "INSERT INTO users() VALUES()";

                #preparing the query for execute
                $stm = $pdo->prepare($query);

                #set the values for query by attribute name ':attribute'
                #$stm->bindValue( ':attribute', $data['attribute'], PDO::PARAM_STR );

                $message = '<div class="alert alert-sucess text-center col-md-12">Dados gravados com sucesso.</div>';
                #execute a query
                if (!$stm->execute())
                {
                    $message = '<div class="alert alert-danger text-center col-md-12">Houve um erro, favor executar o processo novamente.</div>';
                    throw new Exception($message);
                }
                return $message;

            break;
            case 'operator':
                return true;
            break;
            case 'plans':
                return true;
            break;
            case 'fx_plans':
                return true;
            break;
            case 'fx_simulator':
                return true;
            break;
            case 'user_group':
                return false;
            break;
            case 'activity':
                return false;
            break;
            case 'accommodation':
                return false;
            break;

            default:
                return false;
            break;
        }
    }

}