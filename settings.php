<h2>Monitor blockAd</h2>
<div class="wrap">
    <form action="options.php" method="post" enctype="multipart/form-data">

        <?php settings_fields('adblock_options')?>
        Your Message: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="adblock_message" style="width:300px" value="<?php echo $m;?>">
        <br>
        <br> Image displayed: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="text" name="adblock_image_url" style="width:300px; margin-left:-3px" placeholder="Enter Image Url" <?php if (!empty($image)) echo "value = '$image'";?>>
        <br>
        <br>Delay Screen: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="adblock_script_time" style="width:300px; margin-left:-3px" placeholder="Time in seconds" <?php if (!empty($time)) echo "value = '$time'";?>>
        <br>
        <br>Close Button: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="adblock_script_close" style="margin-left:-3px" placeholder="Time in seconds" <?php if (!empty($close)) echo "checked";?>>
        <br>
        <br>
        <input type="submit" name="save_image" class="button-primary" value="upload">
    </form>
</div>
