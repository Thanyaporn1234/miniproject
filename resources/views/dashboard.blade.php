<x-app-layout>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin-left: 50px;
  margin-right: 50px;
  min-width: 250px;
  background-image: url(" https://i.pinimg.com/564x/1a/f4/37/1af4372770e346591636d81d3a23b4c5.jpg");
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}
img {
  text-align: center;
  width: 220px;
  height: 260px;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #ECE4E2;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #FCD3D1;
}

/* Darker background-color on hover */
ul li:hover {
  background: #CFEAE4;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #FFA700;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #FE929F;
  padding: 30px 40px;
  color: white;
  text-align: center;
 
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  color: tomato;
  font-family: cursive;
  margin: 0;
  border-radius: 15px;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
  border-style: solid;
  border-width: 15px;
  border-color: blue;
  
  
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 7%;
  background: #EFC4B9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
  text-shadow: 0;
}

.addBtn:hover {
  background-color: #FFBD00;
}
</style>
</head>
<body>

<div id="myDIV" class="header">
  <h2 style="margin:5px font-family: cursive; font-size: 3em; font-weight: bold;  text-shadow:3px 3px rgb(121, 18, 18); ">Thanyaporn's Portfolio</h2>
  
</div>

<ul id="myUL"></ul>
<table>
  <tr>
    <div class="max-w-6xl  mx-auto sm:px-6 lg:px-8">
      <div class="ml-12 fix position">
        <td><img src="https://scontent.fbkk29-1.fna.fbcdn.net/v/t39.30808-6/269732355_2012765405540272_1797915750031679503_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=oUPdny3rDOUAX92dwi2&_nc_ht=scontent.fbkk29-1.fna&oh=00_AT9r_WZFObk3n_YAy8RNch8Ktg98qPPC1yif6IC788PwPw&oe=6217E9F0"width="200" height="260"
         alt="Palmy"></td>
         <td><img src="https://scontent.fbkk29-1.fna.fbcdn.net/v/t39.30808-6/269610799_2009315179218628_362139741186064669_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=TLAZCIyIOaUAX9Xctko&_nc_ht=scontent.fbkk29-1.fna&oh=00_AT9qj5285PTDhk0JRyiXVtCJtDCiLYa7CZvncaTfP79wXA&oe=62177DA9"width="200" height="260"
         alt="Palmy"></td>
         <td><img src="https://scontent.fbkk29-1.fna.fbcdn.net/v/t39.30808-6/271274906_2022166074600205_7544920342917137751_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=5_NwHKgtR8EAX8loitV&_nc_oc=AQmwFbizdlU1tp_pHzUMsLalFzCsPXjaFmOQLPmHdi0bnai158RRBCef11jHir0mgJw&_nc_ht=scontent.fbkk29-1.fna&oh=00_AT99yk18VDrtgpAn2PYMvlJaYbOO1HojpaeTyMhrIinomQ&oe=6216A516"width="200" height="260"
         alt="Palmy"></td>
         <td><img src="https://scontent.fbkk29-2.fna.fbcdn.net/v/t1.6435-9/83630358_1440957099387775_8008707873401995264_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=FpLkqeJg05EAX_JIz8Z&_nc_ht=scontent.fbkk29-2.fna&oh=00_AT-FEvI84IivH9PXnOdAxAcJOEYyt8emf5e9JEsDt3Vokw&oe=62390263"width="200" height="260"
         alt="Palmy"></td>
         <td><img src="https://scontent.fbkk29-1.fna.fbcdn.net/v/t39.30808-6/266540071_2003310496485763_5112528775359860183_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=tJwur1lAZ2cAX-EGH5d&_nc_ht=scontent.fbkk29-1.fna&oh=00_AT8SWFyggMToTJ1ML3etPDPxNje0rNpHZ4Q9TAAtvRzqeg&oe=6217E990"width="200" height="260"
         alt="Palmy"></td>
         <td><img src="https://scontent.fbkk29-2.fna.fbcdn.net/v/t39.30808-6/241184296_1959745967508883_4871415410532196177_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=vjP2fa8npdcAX9lr5JR&_nc_ht=scontent.fbkk29-2.fna&oh=00_AT88MMPA3pCXgJ9_7nZ88ln9Le7wnYUaSU2D2pHzONFfSw&oe=6217C6EB"width="200" height="260"
         alt="Palmy"></td>
         <td><img src="https://scontent.fbkk29-1.fna.fbcdn.net/v/t39.30808-6/271319982_2022166044600208_5679387686285673397_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=-9IH7KOgohIAX-3e5gu&_nc_ht=scontent.fbkk29-1.fna&oh=00_AT8VPNdVD3o9_BqFEYwymlnh0S0l5PAPTkw4ZyaHezx6pw&oe=62173DD4"width="200" height="260"
         alt="Palmy"></td>
      </div>
    </div>
  </tr>
</table>
<ul>
    <li>My name is Thanyaporn Ngamsangeim.<BR></li>
    <li>I'm Palmy.</li>
    <li>I'm graduated from Rayongwittayakhom School and <br>Studing in Faculty of Engineering at Thammasat University.<br>I am a Software Engineering with experience handling about manage and design software.I'm interested the UX-UI Designer.</li>
    <li>Major: Software Engineering</li>
    <li>Professional Skills<br>Coding:<br>- Java 50 %<br>- Python 50%</li>
    <li>Email: Thanyapornn12@gmail.com</li>
    <li>Facebook: Thanyaporn Ng</li>
    <li>Instargram: Pa_lmy</li>
    <li>My hobbies is watch Youtube and exercise.</li>
    
</ul>


  


</body>
</html>
</x-app-layout>