<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page URL

if ($current_page !== 'index.php') {
    require_once 'header.php'; // Include the footer file
}
?>
<div class="row">
<h1>&lt;Curriculum-Vitae&gt;</h1>
    <div class="clearfix pd-5"></div>
    <dl data-accordion="" class="accordion">
        <dt class="hide"> Details </dt>
        <dd class="accordion-navigation active">
            <a href="#Myself"> <i class="step fi-plus"></i> Myself</a>
            <?php
            function calculateExperience($startDate) {
                $endDate = date('Y-m-d'); // Use current date as the end date

                $startTimestamp = strtotime($startDate);
                $endTimestamp = strtotime($endDate);

                $secondsDiff = $endTimestamp - $startTimestamp;

                $yearsOfExperience = floor($secondsDiff / (365 * 24 * 60 * 60)); // Calculate the number of years

                return $yearsOfExperience;
            }

            // Example usage:
            $startDate = '2007-01-01';

            $experienceInYears = calculateExperience($startDate);
            ?>
            <div class="text-justify content active" id="Myself">
                Hey there, I'm Mukesh Kumar Roy, a front-end developer with loads of experience in making websites look awesome! I've been in the game for over <?php echo $experienceInYears;?> years, and let me tell you, it's been a wild ride. I'm a master when it comes to HTML5, CSS3, and all those fancy acronyms like SCSS, SASS, LESS, and Stylus. I also work my magic with JavaScript and jQuery to make websites come alive.
            </div>
            <div class="text-justify content active" id="Myself">
                I'm all about creating beautiful user interfaces that make people go "Wow!" It's like painting a masterpiece with code. I've had the pleasure of working with big names like Nykaa and Nityo Infotech Pte Ltd, where I focused on building websites that look great on any device. I even led a team of talented individuals to create a project management tool. Talk about teamwork!
            </div>
            <div class="text-justify content active" id="Myself">
                Challenges? Bring 'em on! I thrive on finding creative solutions to problems. I believe in continuous learning and staying up-to-date with the latest technologies. It's like being on an exciting adventure, always discovering new tools and techniques to make websites even more amazing.
            </div>
            <div class="text-justify content active" id="Myself">
                So, if you're looking for someone who can transform your website into a work of art, look no further! Feel free to reach out to me for more information. Let's make the web a more beautiful and user-friendly place together!
            </div>
        </dd>
        <dd class="accordion-navigation">
            <a href="#objective"> <i class="step fi-plus"></i> My objective</a>
            <div class="content text-justify" id="objective">
                Hey there! When it comes to being a UI Tech Lead, my objective is to be the driving force behind an exceptional team, leading them towards greatness. With <?php echo $experienceInYears;?> years of experience in UI development under my belt, I'm fueled by my passion for creating mind-blowing user experiences and coming up with innovative solutions.
            </div>
            <div class="content text-justify" id="objective">
                I'm not one to sit back and relax. I'm always on the lookout for the latest technologies and methodologies in the field, constantly expanding my skills and knowledge. I believe in staying ahead of the game and pushing the boundaries of what's possible.
            </div>
            <div class="content text-justify" id="objective">
                But it's not just about me. It's about fostering a collaborative and productive work environment where every team member can grow, learn, and shine. I strive to create a space where everyone feels empowered to contribute their best and reach new heights in their careers. Together, we can achieve greatness!
            </div>
            <div class="content text-justify" id="objective">
                And hey, I'm not afraid to explore new horizons. I'm open to opportunities where I can apply my leadership skills in the management realm, driving strategic growth and success for organizations. It's all about making a positive impact and making things happen!
            </div>
        </dd>
        <dd class="accordion-navigation">
            <a href="#Responsibility"> <i class="step fi-plus"></i> Key Responsibility</a>

            <div class="content text-justify" id="Responsibility">

                <p>As a UI Tech Lead, I have a wide range of responsibilities that cover all aspects of website development, implementation, and management. Here's a glimpse into what I do:</p>

                <ul>
                    <li>Leading the development of key components of the User Interface (UI) Platform, making sure that the interface behaves exactly as intended to achieve project goals.</li>
                    <li>Supervising the implementation and maintenance of UI elements, constantly improving usability and user experience based on client requirements and feedback. I believe in continuously enhancing the way users interact with websites.</li>
                    <li>Overseeing the development and documentation of UI technical specifications, providing valuable technical guidance to address any issues that arise during UI development and testing. I'm all about finding solutions that work!</li>
                    <li>Contributing to the establishment of technology enhancements for UI, setting guidelines for proposed strategies. I believe in staying ahead of the curve and embracing innovative approaches to enhance the UI experience.</li>
                    <li>Collaborating with cross-functional teams to ensure seamless integration of UI components with other system elements. Teamwork makes the dream work!</li>
                    <li>Conducting thorough code reviews to ensure that the coding standards and best practices are followed. I leave no stone unturned when it comes to maintaining code quality.</li>
                    <li>Mentoring and guiding team members, nurturing their professional growth and development. I believe in building a strong team that constantly pushes their boundaries and excels in their roles.</li>
                    <li>Keeping up with industry trends and emerging technologies, leveraging them to improve UI development processes. I love exploring new tools and techniques that can take our UI experiences to the next level.</li>
                    <li>Collaborating closely with stakeholders to understand project objectives, requirements, and deliverables, ensuring that everything aligns perfectly with the business goals. It's all about delivering results that make a real impact.</li>
                </ul>

                <p>Overall, as a UI Tech Lead, my responsibility is to drive the successful implementation of UI projects, deliver top-notch user interfaces, and lead the team towards excellence in UI development. It's a challenging and rewarding role that allows me to make a meaningful impact on the digital world.</p>            </div>
        </dd>
        <dd class="accordion-navigation">
            <a href="#Experience"> <i class="step fi-plus"></i> Experience</a>
            <div class="content text-justify" id="Experience">
                <ul class="circle">
                    <li>
                        <strong>UI Tech Lead</strong> at Nityo Infotech (<em>June 2017 to Present</em>)
                    </li>
                    <li>
                        <strong>UX Engineer</strong> at Nykaa (<em>May 2016 to May 2017</em>)
                    </li>
                    <li>
                        <strong>UI Developer</strong> at Nityo Infotech (<em>March 2014 to February 2016</em>)
                    </li>
                    <li>
                        <strong>UI Developer</strong> at Netcraft Retail Solutions Pvt. Ltd (<em>November 2012 to February 2014</em>)
                    </li>
                    <li>
                        <strong>HTML Developer</strong> at Applect Learning System Pvt. Ltd (<em>March 2011 to November 2012</em>)
                    </li>
                    <li>
                        <strong>Web Designer</strong> at Soigné Technologies Pvt. Ltd (<em>January 2007 to February 2010</em>)
                    </li>
                </ul>
                <ul style="display: none;">
                    <li>
                        <strong>UI Tech Lead</strong> at Nityo Infotech
                        <br>
                        <em>June 2017 - Present</em>
                        <ul>
                            <li>As the UI Tech Lead, I am responsible for leading the team and providing technical guidance in the development of user interfaces.</li>
                            <li>I bring my leadership abilities to the table and contribute to the overall success of UI projects.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>UX Engineer</strong> at Nykaa
                        <br>
                        <em>May 2016 - May 2017</em>
                        <ul>
                            <li>During my time at Nykaa, I worked as a UX Engineer, focusing on enhancing the user experience of their products or services.</li>
                            <li>I actively participated in the user-centered design process, ensuring that the end-users had a seamless and delightful experience.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>UI Developer</strong> at Nityo Infotech
                        <br>
                        <em>March 2014 - February 2016</em>
                        <ul>
                            <li>As a UI Developer, I played a crucial role in developing user interfaces for various projects at Nityo Infotech.</li>
                            <li>I worked diligently to implement front-end designs, ensuring the usability and functionality of the applications.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>UI Developer</strong> at Netcraft Retail Solutions Pvt. Ltd
                        <br>
                        <em>November 2012 - February 2014</em>
                        <ul>
                            <li>During my tenure at Netcraft Retail Solutions Pvt. Ltd, I contributed to the development of user interfaces for retail solutions.</li>
                            <li>I focused on creating visually appealing and user-friendly interfaces to enhance the retail experience.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>HTML Developer</strong> at Applect Learning System Pvt. Ltd
                        <br>
                        <em>March 2011 - November 2012</em>
                        <ul>
                            <li>As an HTML

                                Developer, I showcased my proficiency in HTML coding and web development.</li>
                            <li>I actively contributed to the development of educational platforms or systems at Applect Learning System.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Web Designer</strong> at Soigné Technologies Pvt. Ltd
                        <br>
                        <em>January 2007 - February 2010</em>
                        <ul>
                            <li>During my time at Soigné Technologies, I worked as a web designer, utilizing my skills to create visually appealing websites.</li>
                            <li>I played a significant role in designing and developing websites for various clients, focusing on aesthetics and functionality.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </dd>
        <dd class="accordion-navigation">
            <a href="#Strengths"> <i class="step fi-plus"></i> Strengths</a>
            <div class="content text-justify" id="Strengths">
                <ul class="circle">
                    <li>
                        <strong>Strengths:</strong>
                        <ul>
                            <li>I have a passion for cooking up experimental codes, always pushing the boundaries of what is possible.</li>
                            <li>The love for coding runs deep in me, and coding loves me back. I am an expert in jQuery.</li>
                            <li>Optimization comes naturally to me, and I enjoy finding ways to make code faster and more efficient.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Skill Expertise:</strong>
                        <ul>
                            <li>I have expertise in HTML5, the latest version of the markup language that powers the web.</li>
                            <li>CSS3 is another area of my expertise, allowing me to create visually stunning and responsive designs.</li>
                            <li>I am skilled in SCSS, SASS, and LESS, which are powerful CSS preprocessors that make styling more efficient.</li>
                            <li>JavaScript is a language I am well-versed in, enabling me to bring interactivity and dynamic functionality to websites.</li>
                            <li>jQuery is one of my core strengths, allowing me to simplify complex tasks and create interactive web experiences.</li>
                            <li>I am proficient in Figma, a popular design tool used for creating user interfaces and prototypes.</li>
                            <li>Photoshop is another tool in my arsenal, helping me to enhance and optimize visuals for the web.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </dd>
        <dd class="accordion-navigation">
            <a href="#Weakness"> <i class="step fi-plus"></i> Weakness</a>
            <div class="content text-justify" id="Weakness">
                Who says I am weak... LOL... but let's keep it real, even superheroes have their weaknesses. Here are a few things that may sometimes pose challenges for me:
                <ul class="circle">
                    <li>Sometimes, I can be overly trusting, which may lead to difficulties in situations where caution is necessary. However, I am actively working on developing a balance between trust and critical thinking to ensure better decision-making.</li>
                    <li>As a foodie, I have a weakness for indulging in culinary delights. While this adds to my personal enjoyment, I understand the importance of maintaining a healthy lifestyle and work-life balance. I strive to find a healthy balance between savoring delicious food and taking care of my well-being.</li>
                </ul>
                By acknowledging these weaknesses, I am continuously learning and growing to overcome them, embracing my humanness, and striving for personal and professional development.
            </div>
        </dd>
        <dd class="accordion-navigation">
            <a href="#Information"> <i class="step fi-plus"></i> Personal Information</a>

            <div class="content text-justify" id="Information">
                <table>
                    <tbody>
                    <tr>
                        <th scope="row">Father's Name</th>
                        <td>:</td>
                        <td>Sh. Mithilesh Prasad Roy</td>
                    </tr>
                    <tr>
                        <th scope="row">Date of Birth</th>
                        <td>:</td>
                        <td>20th Jan, 1984</td>
                    </tr>
                    <tr>
                        <th scope="row">Marital Status</th>
                        <td>:</td>
                        <td>Married</td>
                    </tr>
                    <tr>
                        <th scope="row">Nationality</th>
                        <td>:</td>
                        <td>Indian</td>
                    </tr>
                    <tr>
                        <th scope="row">Religion</th>
                        <td>:</td>
                        <td>Hindu</td>
                    </tr>
                    <tr>
                        <th scope="row">Languages Known</th>
                        <td>:</td>
                        <td>English, Hindi</td>
                    </tr>
                    <tr>
                        <th scope="row">Hobbies</th>
                        <td>:</td>
                        <td>Making Friends, Listening Music, Reading Books</td>
                    </tr>
                    </tbody>
                </table>

                <div class="clearfix"></div>
            </div>
        </dd>
    </dl>

    <div class="clearfix pd-5"></div>
    <h1>&lt;/Curriculum-Vitae&gt;</h1>

    <div class="clearfix pd-5"></div>
</div>
<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page URL

if ($current_page !== 'index.php') {
    require_once 'footer.php'; // Include the footer file
}
?>
