<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page URL

if ($current_page !== 'index.php') {
    require_once 'header.php'; // Include the footer file
}
?>


<div class="row">
    <div class="large-12 column">
        <h1>&lt;About me&gt;</h1>
        <div class="row">
            <div class="large-4 medium-5 column right"><img src="images/User-Interface-Design.png" alt="Mukesh kumar roy" class="about mukesh kumar roy, he is a good ui tech lead, ui developer and web designer also"></div>
            <div class="large-8 medium-7 column description">

                <?php
                function calculateYearsOfExperience($startDate) {
                    $endDate = date('Y-m-d'); // Use current date as the end date

                    $startTimestamp = strtotime($startDate);
                    $endTimestamp = strtotime($endDate);

                    $secondsDiff = $endTimestamp - $startTimestamp;

                    $yearsOfExperience = floor($secondsDiff / (365 * 24 * 60 * 60)); // Calculate the number of years

                    return $yearsOfExperience;
                }

                // Example usage:
                $startDate = '2007-01-01';

                $experienceInYears = calculateYearsOfExperience($startDate);
                //echo "Years of experience: " . $experienceInYears;
                ?>
                <h5>Namaste!</h5>
                <p class="text-justify">
                    Hey there! I'm Mukesh Kumar Roy, a seasoned front-end programmer with a knack for all things web development. I've been in this fascinating field for over <?php echo $experienceInYears;?> years, and let me tell you, it's been quite a ride! I've always had a passion for technology, and I've made it my mission to stay ahead of the curve by constantly exploring new web technologies and finding innovative solutions to the trickiest problems.
                </p>
                <p class="text-justify">
                    But my journey didn't start with lines of code. Believe it or not, I actually studied Sociology Honours! It was during my exploration of computing and PC maintenance that I stumbled upon the captivating world of web design. Back in 2007, I embarked on my first adventure as a Web Designer at Soigne Technologies Pvt Ltd. It was like diving headfirst into a treasure trove of creativity, where I got to work on a variety of websites for different clients. That's when I discovered the thrill of crafting captivating online experiences.
                </p>
                <p class="text-justify">
                    Fast forward to 2011, and I found myself at Applect Learning System Pvt Ltd, helping to build their incredible e-learning portal, www.meritnation.com. As an HTML Developer, I was on a mission to revolutionize education through technology. It was a mind-blowing experience that fueled my passion even further. After that, I set sail for Netcraft Retails Solutions Pvt Ltd, where I transformed into a UI Developer, weaving magic into the fully responsive UI designs of the fantastic e-commerce portal, www.donebynone.com.
                </p>
                <p class="text-justify">
                    Ah, but the adventure didn't end there! In 2018, I joined forces with Nykaa, a powerhouse in the beauty and lifestyle industry, as a UX Engineer. It was an absolute blast as I dived deep into the art of creating mesmerizing UI experiences. My mission? To optimize web experiences and make users fall head over heels for the interfaces I crafted. Trust me, it was a journey filled with creativity, excitement, and a whole lot of user-centric design.
                </p>
                <p class="text-justify">
                    And now, here I am, leading a team as the UI Tech Lead at Nityo Infotech Pte Ltd. We're working on a thrilling project management tool called iStrives, and our client, based in Singapore, keeps us on our toes with their high expectations. But hey, that's what makes it exciting! I get to collaborate closely with the client, decipher their requirements, and transform them into mind-blowing solutions. As the UI Tech Lead, it's my job to ensure our team delivers top-notch, jaw-dropping results that leave our client speechless.
                </p>
                <p class="text-justify">
                    Over the years, I've honed my skills in HTML 5, CSS 3, SASS, LESS, Stylus, JavaScript, and jQuery. It's like having a secret superpower that allows me to create extraordinary user interfaces and deliver experiences that make users go "Wow!" I take immense pride in writing clean, efficient, and maintainable code that not only works like a charm but also adds that special touch of awesomeness to every project.
                </p>
                <p class="text-justify">
                    Thanks for joining me on this thrilling journey and getting a glimpse of my expertise. I'm always on the lookout for new adventures and exciting projects that push the boundaries of technology and take user experience to the next level. So, let's embark on an epic quest together, creating a digital world

                    that's as captivating as it is user-friendly!
                </p>

            </div>
        </div>
        <h1>&lt;/About me&gt;</h1>
    </div>
</div>
<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page URL

if ($current_page !== 'index.php') {
    require_once 'footer.php'; // Include the footer file
}
?>


