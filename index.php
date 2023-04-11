<div style="height:100vh;display:flex; justify-content:center; align-items:center">
    <form action="form.php" method="post">
        <p>Captcha:</p>
        <p>
            <!-- <img src="image.php?captcha_text=<?php echo $_SESSION['captcha']; ?>" alt=""> -->
            <img src="captcha.php" alt="">
        </p>
        <p><input type="text" name="form-captcha" ></p>
        <p><input type="submit" name="submit" value="Submit"></p>
    </form>
</div>
