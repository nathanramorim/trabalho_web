<?php


/**
*
*/
class User extends Model
{
	private $user = array(
							'CPF' => NULL,
							'NAME' => NULL,
							'USER_PW' => NULL,
							'EMAIL' => NULL
						);

	function __construct(){}

	public function Auth()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username']) || !empty($_POST['user_pw'])) {
			try {
				$this->verifyUser($_POST['username'],$_POST['user_pw']);
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}

	public function verifyUser($username,$pw)
	{
		$con = Model::connect();
		$query = "SELECT cpf,username,password
		FROM `users`
		WHERE `username`=:username AND `password`=:password";

		$stm = $con->prepare($query);
		$stm->bindValue( ':username', $username, PDO::PARAM_STR );
		$stm->bindValue( ':password', $pw, PDO::PARAM_STR );

		if( $stm->execute() ){
			if( $stm->rowCount() < 1 ){
				$message = '<div class="alert alert-danger text-center">Usuário ou Senha inválido.</div>';
				throw new Exception($message);
			}else{
				$data = $stm->fetch( PDO::FETCH_ASSOC );
				$_SESSION["session"] = $data['username'];
				header('Location: home');
			}
		}
		else
		{
			echo "Ocorreu um erro.";
		}
	}
}