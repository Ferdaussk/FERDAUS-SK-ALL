<!DOCTYPE html>
<html>
<head>
  <title>Client-Side Search and Sections Example</title>
  <style>
    /* CSS for layout and styling */
    .row {
      display: flex;
    }
    .column {
      flex: 25%;
      padding: 10px;
    }
  </style>
</head>
<body>
  <!-- Search input section -->
  <div>
    <input type="text" id="searchInput" placeholder="Enter your search term" oninput="performSearch()">
  </div>
  
  <!-- Sections -->
  <div class="row" id="sectionsContainer">
    <!-- Sections will be dynamically added here -->
    <div class="column">
      <h2>Section 1</h2>
      <p>This is the content of section 1.</p>
    </div>
    <div class="column">
      <h2>Section 2</h2>
      <p>This is the content of section 2.</p>
    </div>
    <div class="column">
      <h2>Section 3</h2>
      <p>This is the content of section 3.</p>
    </div>
    <div class="column">
      <h2>Section 4</h2>
      <p>This is the content of section 4.</p>
    </div>
    <div class="column">
      <h2>Section 5</h2>
      <p>This is the content of section 5.</p>
    </div>
    <div class="column">
      <h2>Section 6</h2>
      <p>This is the content of section 6.</p>
    </div>
  </div>

  <script>
    function performSearch() {
      var searchTerm = document.getElementById('searchInput').value.toLowerCase();
      var sections = document.querySelectorAll('.column');
      
      // Show/hide sections based on search term
      sections.forEach(function(section) {
        var title = section.querySelector('h2').textContent.toLowerCase();
        
        if (title.includes(searchTerm)) {
          section.style.display = 'block';
        } else {
          section.style.display = 'none';
        }
      });
    }
  </script>
</body>
</html>
