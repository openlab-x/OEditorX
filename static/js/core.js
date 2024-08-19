// assets/js/functions.js
//--------------------------------------------------------------------
/*
This is a basic JavaScript file that sets up an event listener for the
submit button. When the button is clicked, it retrieves the code from a 
code editor and then sends it to the server for compilation.

We used CDN over hosting it on our hosting for better performance; why?
CDNs often have multiple servers distributed across the globe, which can
lead to faster loading times for users since the file is served from a server
*/
//--------------------------------------------------------------------


// ACE editor library
(function() {
    var script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.6/ace.js';
    script.type = 'text/javascript';
    script.charset = 'utf-8';
    document.head.appendChild(script);
})();

// jQuery library
(function() {
    var script = document.createElement('script');
    script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js';
    script.type = 'text/javascript';
    script.charset = 'utf-8';
    document.head.appendChild(script);
})();

// Function to update the result in the iframe
function update() {
  var res = document.getElementById('result').contentWindow.document;
  res.open();
  res.write(eh.getValue());
  res.close();
}

// Function to set up the editor
function setEditor() {
  // For the html editor
  window.eh = ace.edit("htmleditor");
  eh.setTheme("ace/theme/xcode");
  eh.session.setMode("ace/mode/html");

  eh.getSession().on('change', function() {
    update();
  });
}

// Initialize the editor
setEditor();

// Function to check if the page is loaded in an iframe
function inIframe() {
  
  try {
    return window.self !== window.top;
  } catch (e) {
    return true;
  }
}

// Add class to <html> tag if loaded in an iframe
if (inIframe()) {
  document.getElementsByTagName('html')[0].classList.add('loaded-in-iframe');
  // Skip the CSS and just hide elements using JavaScript here!
}
