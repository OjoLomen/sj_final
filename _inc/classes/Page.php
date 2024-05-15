<?php

    class Page{

        private $page_name;

        public function __construct($page_name)
        {
            $this->page_name = $page_name;
        }

        function add_stylesheet() {
            echo '<link rel="stylesheet" href="../css/style.css">';
            echo '<link rel="stylesheet" href="../css/bootstrap.css">';
            echo '<link rel="stylesheet" href="../css/responsive.css">';
            echo '<link rel="stylesheet" href="../css/style.css.map.css">';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
        
            //$page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
            

        }

        function add_scripts(){
            echo('<script src="../js/bootstrap.js"></script>');
            echo('<script src="../js/custom.js"></script>');
            echo('<script src="../js/jquery-3.4.1.min.js"></script>');
            //$page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
            
        }
    }

?>