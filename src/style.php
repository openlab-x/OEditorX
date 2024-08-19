<style>
body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  background-color: #000000;
}

#container {
  height: 100%;
  width: auto;
  white-space: nowrap;
  overflow: hidden;
  position: relative;
  background-color: #000000;
}
#url{
  
  height: 100%;
  width: 50%;
  display: inline-block;
  vertical-align: top;
}
#output {
 
  height: 100%;
  width: 50%;
  display: inline-block;
  vertical-align: top;
}
#htmleditor {
  height: 100%;
  min-height: 83vh;
  width: 50%;
  display: inline-block;
  font-size: 14px; 
}


#result {
  background-color: white;
  height: 100%;
  min-height: 83vh;
  width: 50%; 
  display: inline-block;
/*display: inline-block;  */
}

#main_bar_color {
  background-color: #000000;
  color: white;
  height: 45px;
}

#compiler_name {
  color: white;

  font-weight: bold;
}

#example_name {
  background-color: #2e2e2e;
  color: white;
  font-size: 16px;
  border-color: #2e2e2e;
  font-weight: bold;  
}

.run_button {
  background-color: white;
  font-size: 15px;
  color: black;
  border: 2px solid #555555; width: 148px;
}

.run_button:hover {
  background-color: #f44336;
  color: white;
}

/* Hiding elements when loaded inside an iframe */
html.loaded-in-iframe #emoji,
html.loaded-in-iframe .run_button {
  display: none!important;
}

</style>
