<!--<h3 style="color:#FF6633;"><?//php echo $_GET[msg];?></h3>-->

<div class="container">
    <br><br>
    <h1>Contact Us</h1>
    <hr>
<?


function create_image($cap)
{

            unlink("./assets/image1.png");

            global $image;

            $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

            $background_color = imagecolorallocate($image, 255, 255, 255);

            $text_color = imagecolorallocate($image, 0, 255, 255);

            $line_color = imagecolorallocate($image, 64, 64, 64);

            $pixel_color = imagecolorallocate($image, 0, 0, 255);

            imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

            for ($i = 0; $i < 3; $i++) {

                imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

            }

            for ($i = 0; $i < 1000; $i++) {

                imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

            }

            $text_color = imagecolorallocate($image, 0, 0, 0);

            $string = ImageString($image, 22, 30, 22, $cap, $text_color);

            // Session Variable Here...
            $_SESSION["captcha"] = $cap;

            imagepng($image, "./assets/image1.png");

        }

        create_image($data["cap"]);

        echo "<img src='/assets/image1.png'>";


?>

    <form method="post" action="contactRecd">
        <div>

            <label for="exampleInputEmail1">Enter Captcha </label>

            <input name="captcha" type="captcha" id="captcha"  placeholder="">

        </div>
        <div class="form-group">
            <label for="email">Email address (required)</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password (required)</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="requestResponse">Request Response?</label>
            <select class="form-control" id="requestResponse">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message (required)</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="attachments">Attachments (optional)</label>
            <input type="file" class="form-control-file" id="attachments" name="attachments" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Attach files from your computer.</small>
        </div>
        <fieldset class="form-group">
            <legend>Select Country</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="United States" checked>
                    United States
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Mexico">
                    Mexico
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="Canada">
                    Canada
                </label>
            </div>
        </fieldset>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <!--<input type="button" class="btn btn-primary" value="Submit" >-->

    </form>
</div>
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script>
    $("#ajaxbutton").click(function() {
        $.ajax({
            method: "POST",
            url: "/main/ajaxParams",
            data: { email: $("#email").val(), password: $("#password").val(), message: $("#message").val()},
            success: function (msg) {
                var match = /\r|\n/.exec(msg);
                if(msg==match+"Success"){
                    alert("Message Sent Successfully!");
                }else if(msg==match+"Invalid info") {
                    alert("There was an issue sending your message.")
                }else{
                    alert("You made a mistake! Try Again!")
                }
            }
        })
    })
</script>

</body>
</html>