<?

class main extends AppController{
    public function __construct()
    {
        $navLinks = array(
            "mainlink"=>"main",
            "aboutlink"=>"about",
            "contactlink"=>"contact"
        );

        $this->getView("header2",$navLinks);

        $this->getView("main");

        $this->getView("footer");
    }
}

?>