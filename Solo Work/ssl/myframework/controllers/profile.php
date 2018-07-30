<?

class profile extends AppController{
    public function __construct()
    {
       if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){

       }else{
            header("Location:/main");
       }
    }

    // third party index -- default method
    public function index(){
        $this->getView("header",array("pagename"=>"profile"));
        $this->getView("profile",array("pagename"=>"profile"));

        echo $_SESSION["aboutme"]; //"This is a protected area";
    }

    public function update(){

        if($_FILES["img"]["name"]!=""){
            $imageFileType = pathinfo("assets/images/".$_FILES["img"]["name"],PATHINFO_EXTENSION);

            if(file_exists("assets/images/".$_FILES["img"]["name"])){
                echo "Sorry, file already exists";
            }else{
                if($imageFileType != "jpg" && $imageFileType != "png"){
                    echo "Sorry, this file type is not allowed.";
                }else{
                    if(move_uploaded_file($_FILES["img"]["tmp_name"],"assets/images/".$_FILES["img"]["name"])){
                        echo "File Uploaded Successfully";
                    }else{
                        echo "Error Uploading File";
                    }
                }
            }
        }

        header("Location:/profile?msg=File Uploaded");
    }

}

?>