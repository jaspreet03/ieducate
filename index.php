<?php  include("header.php"); ?>
<?php
if(!isset($_SESSION['user'])){
	header("location:loginpage.php"); 
}
?>


<?php  include("navbar.php"); ?>

  <section class="background firstSection" id="home">
    <div class="box-main">
      <div class="firstHalf">
        <p class="text-big">The Future of education is here</p>
        <p class="text-small"> we are livng in this world full of hopes and we deliver to that and proudly present our
          new range of services The Future of education
          is here</p>
        <div class="buttons">
          <button class="btn">Subscribe</button>
          <button class="btn">Watch Videos</button>
        </div>
      </div>
      <div class="secondHalf">
        <img src="img/education.jpg" alt="education" width="250px" height="250px">
      </div>


    </div>

  </section>
  <section class="section" id="about">
    <div class="paras">
      <p class="sectionTag text-big">The End Of Your Search Is Here</p>
      <p class="sectionSubTag text-small">Education is the process of facilitating learning, or the acquisition of
        knowledge, skills, values, morals, beliefs, and habits. Educational methods include teaching, training,
        storytelling, discussion and directed research. Education frequently takes place under the guidance of
        educators, however learners can also educate themselves. Education can take place in formal or informal settings
        and any experience that has a formative effect on the way one thinks, feels, or acts may be considered
        educational. The methodology of teaching is called pedagogy. </p>
    </div>
    <div class="thumbnail">
      <img src="https://source.unsplash.com/900x900/?coding,laptop" alt="education" >

    </div>
  </section>



  <section class="section section-left">
    <div class="paras">
      <p class="sectionTag text-big">Transforming Education In India</p>
      <p class="sectionSubTag text-small">This is ISCED level 1.Primary (or elementary) education consists of the first
        four years enrolled in primary education, and this proportion was rising. Under the Education For All
        programs driven by UNESCO, most countries have committed to achieving universal enrollment in primary education
        by 2015, and in many countries, it is compulsory. Schools that provide primary education, are mostly referred to
        as primary schools or elementary schools. Primary schools are often subdivided into infant schools and junior
        schools</p>
    </div>
    <div class="thumbnail">
      <img src="https://source.unsplash.com/900x900/?books,study" alt="education" class="imgFluid">

    </div>
  </section>




  <section class="section" id="services">
    <div class="paras">
      <p class="sectionTag text-big">Lets Grow Together</p>
      <p class="sectionSubTag text-small">Education began in prehistory, as adults trained the young in the knowledge
        and skills deemed necessary in their society. In pre-literate societies, this was achieved orally and through
        imitation. Story-telling passed knowledge, values, and skills from one generation to the next. As cultures began
        to extend their knowledge beyond skills that could be readily learned through imitation, formal education
        developed. Schools existed in Egypt at the time of the Middle Kingdom.
        Matteo Ricci and Xu Guangqi in th of, was the country's most influential ancient philosopher, whose educational
        outlook continues to influence the societies of China and neighbours like Korea, Japan, and Vietnam.</p>
    </div>
    <div class="thumbnail">
      <img src="https://source.unsplash.com/900x900/?college,school" alt="education" class="imgFluid">

    </div>
  </section>

  <section class="contact" id="contact">
    <h2 class="text-center">Contact Us</h2>
    <form class="form" action="formsubmit.php" method="post">
      <input type="text" class="form-input" name="name" id="name" placeholder="Enter Your Name">
      <input type="text" class="form-input" name="phone" id="phone" placeholder="Enter Your Phone">
      <input type="text" class="form-input" name="email" id="email" placeholder="Enter Your Email">
      <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Elaborate Your Concern">
</textarea>
      <input type="submit" value="Submit" class="btn btn-sm btn-dark">

</form>


  </section>

 <?php  include("footer.php"); ?>