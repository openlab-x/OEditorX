// jQuery Library 3.7.1
(function() {
    // Create a script element
    var jqueryScript = document.createElement('script');
    // Set the source attribute to the jQuery library URL
    jqueryScript.src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js';
    // Set the type attribute
    jqueryScript.type = 'text/javascript';
    // Set the charset attribute
    jqueryScript.charset = 'utf-8';
    // Append the script element to the document's head
    document.head.appendChild(jqueryScript);
})();

// Bootstrap CSS Library 5.3.0
(function() {
    // Create a link element
    var link = document.createElement('link');
    // Set the href attribute to the Bootstrap CSS library URL
    link.href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css';
    // Set the rel attribute to specify the relationship between the current document and the linked document
    link.rel = 'stylesheet';
    // Set the type attribute to specify the type of the linked document
    link.type = 'text/css';
    // Set the charset attribute
    link.charset = 'utf-8';
    // Append the link element to the document's head
    document.head.appendChild(link);
})();

// Include jQuery Library (again) 3.6.0
(function() {
    // Create a script element
    var jqueryScript = document.createElement('script');
    // Set the source attribute to the jQuery library URL
    jqueryScript.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
    // Set the type attribute
    jqueryScript.type = 'text/javascript';
    // Set the charset attribute
    jqueryScript.charset = 'utf-8';
    // Append the script element to the document's head
    document.head.appendChild(jqueryScript);
})();

// Include Bootstrap JS Library 5.3.0
(function() {
    // Create a script element
    var bootstrapScript = document.createElement('script');
    // Set the source attribute to the Bootstrap JS library URL
    bootstrapScript.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js';
    // Set the type attribute
    bootstrapScript.type = 'text/javascript';
    // Set the charset attribute
    bootstrapScript.charset = 'utf-8';
    // Append the script element to the document's head
    document.head.appendChild(bootstrapScript);
})();
