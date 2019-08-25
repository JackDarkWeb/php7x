<?php

namespace Framework{

    use mysql_xdevapi\Exception;

    class Database
    {
        protected $instance;

        public function __construct($host, $username, $password, $shema)
        {
            $this->instance = new MySQLi($host, $username, $password, $shema);
        }
        /**
         * string
         */
        public function getInstance()
        {
            throw new Exception("Instance is protected");
        }

        /**
         * @param mixed $instance
         * string
         */
        public function setInstance($instance)
        {
            if($instance instanceof MySQLi){

                $this->instance = $instance;
            }
            throw new Exception("Instance must be of type MySQLi");
        }

        public function query($sql)
        {
            return $this->instance->query($sql);
        }

        public function __call($name, $arguments)
        {
            if(method_exists($this, $name)){

                echo "This $arguments arguments are not define in the method ";
                
            }else{

                echo "This $name method is not define in the class ";
            }
        }

    }

    $test = new Database("localhost", "root", "", "");
    $test->test();
}




