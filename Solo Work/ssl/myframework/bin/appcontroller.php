<?

session_start();
class AppController{
    public function __construct($urlPathParts,$config)
    {
        // db information
        $this->db = new PDO("mysql:dbname=".$config["dbname"].";",$config["dbuser"],$config["dbpass"]);

        // http://127.0.0.1/main/index

        $this->urlPathParts = $urlPathParts;

        // http://127.0.0.1/main
        if($urlPathParts[0]){

            include './controllers/' . $urlPathParts[0] . ".php";

            $appcon = new $urlPathParts[0]($this);

            // http://127.0.0.1/main/contact
            if(isset($urlPathParts[1])){
                $appcon->$urlPathParts[1]();
            }else{
                // http://127.0.0.1/main/
                // if there is a default method inside this controller (index)
                $methodVariable = array($appcon,'index');
                if(is_callable($methodVariable,false,$callable_name)){
                    $appcon->index($this);
                }
            }
            // if there is a default method inside this controller (index)

        }else{
            include './controllers/' . $config['defaultController'] . ".php";

            $appcon = new $config['defaultController']($this);

            if(isset($urlPathParts[1])){
                $appcon->config['defaultController'][1]();
            } else {
                $methodVariable = array($appcon,'index');
                if(is_callable($methodVariable,false,$callable_name)){
                    $appcon->index($this);
                }
            }
        }
    }

    public function getView($page,$data=array()){
        require_once './views/'.$page.".php";
    }

    public function getModel($page){
        require_once './models/'.$page.".php";
        $model = new $page($this);
        return $model;
    }
}

?>