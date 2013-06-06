<?php
class Blog extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';
                $this->load->model('user_model', '', TRUE);
                $result=$this->user_model->wyswietl();
                foreach ($result as $key) {
                    $imie=$key['imie'];
                    $nazwisko=$key['nazwisko'];
                    echo "<br>$imie $nazwisko";
                        }
        }
        public function comments()
        {
            echo 'Look at this!';
        }
        public function shoes($sandals, $id)
        {
            echo "$sandals - $id<br>";
        }
        private function prywatna(){
            echo 'Prywatna funkcja chce powiedziec: Hello!';
        }
//        public function _remap($method)
//        {
//            echo 'jestem w remap!';
//        }
}
?>