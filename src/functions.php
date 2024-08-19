<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- ACE editor cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.23.4/ace.js" type="text/javascript" charset="utf-8"></script>

<script>
  function update() {
    var res = document.getElementById('result').contentWindow.document;
    res.open();
    res.write(eh.getValue());
    res.close();
  }
  function handleRun() {
    var runButton = document.getElementById('runButton');
    runButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Running...';
    runButton.disabled = true;
    // Simulate some action that takes time
    setTimeout(function() {
      // Reset button after action is completed
      runButton.innerHTML = '&blacktriangleright; Run (Ctrl + ↵)';
      runButton.disabled = false;
      // Call update function
      update();
    }, 500); // time in milliseconds
  }

  document.addEventListener('keydown', function(event) {
    if (event.ctrlKey && event.key === 'Enter') {
      // Call the handleRun function when Ctrl + Enter is pressed
      handleRun();
    }
  });
  
  function setEditor() {
    // For the html editor
    window.eh = ace.edit("htmleditor");
    eh.setTheme("ace/theme/xcode"); // Selecting the xcode
    eh.session.setMode("ace/mode/html");

      // Listen for changes in the theme dropdown
    document.getElementById("themeDropdownButton").addEventListener("change", function(event) {
      const selectedTheme = event.target.value;
      changeTheme(selectedTheme);
     });

       // Listen for changes in the example dropdown
    document.getElementById("exampleDropdown").addEventListener("change", function(event) {
      const selectedExample = event.target.value;
      loadExample(selectedExample);
  });

    

    eh.getSession().on('click', function() {
      update();
    });
  }

  setEditor();

  // Function to change the editor's theme
function changeTheme(themeName) {
  eh.setTheme("ace/theme/" + themeName);
}




// Function to load the selected example
function loadExample(exampleUrl) {
  // Fetch the content of the selected example URL using AJAX
  fetch(exampleUrl)
    .then(response => response.text())
    .then(data => {
      // Update the content of the editor with the fetched example content
      eh.setValue(data);
      
      /*  Important Note:
          When you use eh.setValue(data) to set the content of the ACE editor, it selects all the text by default.
          To prevent this behavior and avoid selecting all text after setting the new content,
          you can use the clearSelection() method of the ACE editor to clear any existing selection after setting the new content.
      */
     
      // Clear any existing selection
      eh.clearSelection();
      
      // Update the URL displayed on the page
      document.getElementById("url").textContent = exampleUrl;
      // on change the example trigger handleRun to run the example
      handleRun();
    })
    .catch(error => {
      console.error('Error fetching example:', error);
    }); 

}

/* // For later :) Function to load the selected example and trigger handleRun
 function loadExampleAndRun(exampleUrl) {
  // Load the selected example
  loadExample(exampleUrl);

  // Trigger the handleRun function
  handleRun();
} */
</script>

<script>
  function inIframe() {
    try {
      return window.self !== window.top;
    } catch (e) {
      return true;
    }
  }

  if (inIframe()) {
    document.getElementsByTagName('html')[0].classList.add('loaded-in-iframe');
    // Skip the CSS and just hide elements using JavaScript here!
  }

</script>


