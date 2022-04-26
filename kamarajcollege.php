<?php
require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>
<img src="2.jpg" height="800" width="1200">
<div class="row main-row">
    <div class="8u">
        <section class="left-content">
            <h2><?php echo stripslashes($pageDetails["page_title"]); ?></h2>
            <?php echo stripslashes($pageDetails["page_desc"]); ?>

           Kamaraj College has long been recognized as a premier institution of higher learning for students in southern districts of Tamilnadu. A centre for academic excellence and achievement, it is today one of the finest institutions for Arts, Sciences and Commerce. Positioned at the cutting edge of knowledge, Kamaraj College has not just kept pace with the changing world, but has been the pioneering spirit behind many innovations in the field of education and research. The motive is to imbibe the teaching/learning process with a unique blend of intellectual rigor coupled with ethical engagement. At Kamaraj College, the belief is in a holistic vision that never discounts the past, but at the same time embraces the future.<br>

Kamaraj College is committed to nurturing and creating young men and women to be outstanding citizens of the world. Students of Kamaraj College understand that with the power of knowledge, comes the responsibility to use it for the utmost benefit of the community. They recognize challenges as opportunities. Kamaraj College students are empowered with professional competence, an ability to assume positions of leadership with ease and shatter inhibitory glass ceilings. An education at Kamaraj College enables women to reconcile excellence with humanity, to celebrate diversity and redefine notions of success. The emphasis is on a liberating and not a domesticating pedagogy.
<br>
Kamaraj College was established in 1966 in Tuticorin by the 1966 by the Tuticorin Education Society. Thiru A.M.M.S. Ganesan Nadar was the founder and patron. At present, Thiru. A.M.M.S.G. Kathiresan is the patron of our college. The college was initially affiliated to Madurai Kamaraj University till 1990. From September 1990, the College has been affiliated to Manonmaniam Sundaranar University, Tirunelveli. The College has been named after Bharat Ratna Shri. K. Kamaraj as a tribute to the invaluable service rendered by him to our nation, particularly to the cause of education.
<br>
The college is located in a beautiful 49 acre campus within Tuticorin city limits. The college presently has about 2,900 students pursuing degree and doctoral programs in Arts, Science and Commerce streams. They are taught and mentored by over 150 highly qualified faculty. The college continues to rank highly within the University, with consistent achievement of University Ranks by its meritorious students. Students are routinely placed at major national and multi-national companies upon graduation. The Alumni Association of the college is also very active.
<br>
Within the district, the College has become a byword for academic and extra-curricular development, under the inspiring leadership of the current President. An enlightened and supportive managing committee, drawn from the fields of industry, law, journalism and academics, assist the President and Secretary in the running of the college.
<br>
The overriding vision is to create a center of excellence for young students to achieve their dreams by providing an atmosphere that brings out their intellect and the spirit, develops their confidence, and enables critical thinking. The journey well begun has the infinite potential to evolve further, setting newer and higher standards for excellence.
        </section>
    
    </div>
    <!--sidebar starts-->
	<?php include("sidebar.php"); ?>    
    <!--sidebar ends-->
</div>
</body>
<?php
include("footer.php");
?>