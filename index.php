<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<!-- Hero Section -->
<section class="py-5 text-center bg-light">
  <div class="container">
    <h1 class="display-4">Empowering Businesses with Data-Driven Decisions</h1>
    <p class="lead">Analytics solutions tailored to your strategy, operations, and growth.</p>
    <a href="#consultation" class="btn btn-primary btn-lg mt-3">Request a Consultation</a>
  </div>
</section>

<!-- Services Section -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row g-4">

      <?php
      $services = [
        [
          'icon' => 'bi-bar-chart-line',
          'title' => 'Financial Analytics',
          'description' => 'Revenue forecasting, risk assessment, and financial modeling to drive profitability.'
        ],
        [
          'icon' => 'bi-graph-up-arrow',
          'title' => 'Operations Analytics',
          'description' => 'Supply chain optimization and operational efficiency analysis.'
        ],
        [
          'icon' => 'bi-bullseye',
          'title' => 'Business Strategy',
          'description' => 'KPI tracking and decision intelligence for strategic planning.'
        ],
        [
          'icon' => 'bi-people',
          'title' => 'People & HR Analytics',
          'description' => 'Employee performance insights and retention analysis.'
        ],
        [
          'icon' => 'bi-lightbulb',
          'title' => 'Customer Insights',
          'description' => 'Behavior analysis and customer segmentation strategies.'
        ],
        [
          'icon' => 'bi-shield-lock',
          'title' => 'Market Research',
          'description' => 'Competitive analysis and market positioning insights.'
        ]
      ];

      foreach ($services as $service) {
        echo '
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 text-center shadow-sm">
            <div class="card-body">
              <i class="bi ' . $service['icon'] . ' fs-1 text-primary mb-3"></i>
              <h5 class="card-title">' . $service['title'] . '</h5>
              <p class="card-text">' . $service['description'] . '</p>
            </div>
          </div>
        </div>';
      }
      ?>

    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4">
        <h2>500+</h2>
        <p>Projects Completed</p>
      </div>
      <div class="col-md-4">
        <h2>98%</h2>
        <p>Client Satisfaction</p>
      </div>
      <div class="col-md-4">
        <h2>10+</h2>
        <p>Industries Served</p>
      </div>
    </div>
  </div>
</section>

<!-- Consultation Form Section -->
<section id="consultation" class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center mb-4">Request a Free Consultation</h2>
    <form action="mail/contact-form-handler.php" method="POST" class="row g-3">
      <div class="col-md-6">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>
      <div class="col-12">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" id="message" rows="4" class="form-control" required></textarea>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary btn-lg mt-3">Submit Request</button>
      </div>
    </form>
  </div>
</section>

<?php include 'includes/footer.php'; ?>