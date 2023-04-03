<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <div class="container">
    <a href="<?= $base_url ?>" class="navbar-brand">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="areas-covered" id="themes">Fire Door Services</a>
          <div class="dropdown-menu" aria-labelledby="themes">
            <a class="dropdown-item" href="areas-covered">Areas Covered</a>
            <div class="dropdown-divider"></div>

            <?php foreach ($locations as $dropdown_location) {
              echo '<a class="dropdown-item" href="' . $dropdown_location . '-' . $current_service_url . '">' . ucfirst($dropdown_location) . '</a>';
            } ?>

          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="about" id="download">Services</a>
          <div class="dropdown-menu" aria-labelledby="download">
          <a class="dropdown-item disabled" href="">Fire Door Services</a>

            <a class="dropdown-item" href="fire-door-inspection">Fire Door Inspection</a>
            <a class="dropdown-item" href="fire-door-installation">Fire Door Installation</a>
            <a class="dropdown-item" href="fire-door-maintenance">Fire Door Maintenance</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item active" href="">Landlord Services</a>
            <a class="dropdown-item" href="property-maintenance">Property Maintenance</a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Resources</a>
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="about" id="download">About</a>
          <div class="dropdown-menu" aria-labelledby="download">
            <a class="dropdown-item" href="about">About</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="qualifications">Our Qualifications</a>
            <a class="dropdown-item" href="compliance">Our Compliance</a>
            <a class="dropdown-item" href="sustainability">Our Sustainability</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="showcase">Our Showcase</a>
            <a class="dropdown-item" href="projects">Our Projects</a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>


      </ul>
      <ul class="navbar-nav ms-md-auto">
        <li class="nav-item">
          <a target="_blank" rel="noopener" class="nav-link" href="<?= $social_link_linkedin ?>"><i class="bi bi-linkedin"></i> Linkedin</a>
        </li>
        <li class="nav-item">
          <a target="_blank" rel="noopener" class="nav-link" href="<?= $social_link_facebook ?>"><i class="bi bi-facebook"></i> Facebook</a>
        </li>
        <li class="nav-item">
          <a target="_blank" rel="noopener" class="nav-link" href="<?= $social_link_twitter ?>"><i class="bi bi-twitter"></i> Twitter</a>
        </li>
        <li class="nav-item">
          <a target="_blank" rel="noopener" class="nav-link" href="<?= $social_link_insta ?>"><i class="bi bi-instagram"></i> Instagram</a>
        </li>
      </ul>
    </div>
  </div>
</div>