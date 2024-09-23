function showSection(sectionId) {
    // Hide all sections
    var sections = document.querySelectorAll('.section');
    sections.forEach(function(section) {
        section.classList.remove('active');
    });

    // Show the clicked section
    document.getElementById(sectionId).classList.add('active');

    // Remove active class from all links
    var links = document.querySelectorAll('.sidebar ul li a');
    links.forEach(function(link) {
        link.classList.remove('active');
    });

    // Add active class to the clicked link
    event.target.classList.add('active');
}
