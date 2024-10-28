<section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>{{__("core.team")}}</h2>
      <p>{{__("core.team_title")}}</p>
    </div>
    <!-- End Section Title -->

    <div class="container">
      <div class="row gy-4">
        <x-sections.team.teamCard 
            imgSrc="portal/assets/images/team/team-2.jpg"
            name="Sdra Ma"
            position="Backend developer"
            description="Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate."
            :socialLinks="[
                'twitter' => 'https://twitter.com/',
                'facebook' => 'https://facebook.com/',
                'instagram' => 'https://instagram.com/',
                'linkedin' => 'https://linkedin.com/in/']" 
            data_aos_delay="100"
        />
        <x-sections.team.teamCard 
            imgSrc="portal/assets/images/team/team-2.jpg"
            name="Mohamed Muwas"
            position="Backend developer"
            description="Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate."
            :socialLinks="[
                'twitter' => 'https://twitter.com/',
                'facebook' => 'https://facebook.com/',
                'instagram' => 'https://instagram.com/',
                'linkedin' => 'https://linkedin.com/in/']"
            data_aos_delay="200"
        />
        <x-sections.team.teamCard 
            imgSrc="portal/assets/images/team/team-2.jpg"
            name="Wesam Shaker"
            position="Front End Developer"
            description="Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi."
            :socialLinks="[
                'twitter' => 'https://twitter.com/',
                'facebook' => 'https://facebook.com/',
                'instagram' => 'https://instagram.com/',
                'linkedin' => 'https://linkedin.com/in/']"
            data_aos_delay="300"
        />
        <x-sections.team.teamCard 
            imgSrc="portal/assets/images/team/team-2.jpg"
            name="Mohamed ALdali"
            position="Mobile Application Developer"
            description="Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia."
            :socialLinks="[
                'twitter' => 'https://twitter.com/',
                'facebook' => 'https://facebook.com/',
                'instagram' => 'https://instagram.com/',
                'linkedin' => 'https://linkedin.com/in/']"
            data_aos_delay="400"
        />
      </div>
    </div>
</section>