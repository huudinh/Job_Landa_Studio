<?php 
    if($check == 0){
        include(locate_template("Module/Home/contact_dls_1_0_0/contact_dls_1_0_0_css.php"));
    }
?>
<section class="contact_dls_1_0_0 ">
    <div class="container">
        <div class="main_dls_1_0_0__title"><?php echo the_title();  ?></div>
        <div class="main_dls_1_0_0__line"></div>
        <div class="contact_dls_1_0_0__top">
            <div class="contact_dls_1_0_0__form">
                <div class="contact_dls_1_0_0__formTitle">
                    <img src="<?php echo $path ?>images/mail.png" />
                    <p>Liên lạc với chúng tôi</p>
                </div>
                <form id="register-form2">
                    <div class="contact_dls_1_0_0__formContent">
                        <input type="text" name="iemail" placeholder="Nhận Email của bạn">
                        <textarea name="inote" cols="30" rows="5" placeholder="Nội dung"></textarea>
                        <button type="submit">Gửi</button>
                    </div>
                </form>
            </div>
            <div class="contact_dls_1_0_0__call">
                <div class="contact_dls_1_0_0__formTitle">
                    <img src="<?php echo $path ?>images/call.png" alt="">
                    <p>Gọi cho chúng tôi</p>
                </div>
                <?php 
                    while ( have_posts() ) : 
                        the_post(); 
                        the_content();  
                    endwhile; 
                ?>
            </div>
        </div>
        <?php echo $field["contact_content"] ?>       
    </div>
</section>
<script>
    (function () {
    const registerForm = document.getElementById('register-form2');
        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const registerInfo = {
                email: registerForm.iemail,
                note: registerForm.inote,
            };
            validateForm(registerInfo);
        });

    })();
</script>