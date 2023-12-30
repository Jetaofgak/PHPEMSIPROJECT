const loginBtn = document.getElementById('login-btn');

loginBtn.addEventListener('click', (event) => {
  event.preventDefault();
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  if (username === 'user1' && password === 'pass1') {
    location.assign('Main Page.html');
  } else {
    alert('Invalid username or password');
  }
});

function myfunction1(){
    let userinput=document.querySelector("#search-input").value;
    if(String(userinput).toLowerCase()=="the low end theory".toLowerCase()) location.assign('vinyl1.html');
    if(String(userinput).toLowerCase()=="People's Instinctive Travels and the Paths of Rhythm".toLowerCase()) location.assign('vinyl2.html');
    if(String(userinput).toLowerCase()=="Midnight Marauders".toLowerCase()) location.assign('vinyl3.html');
    if(String(userinput).toLowerCase()=="Beats, Rhymes and Life".toLowerCase()) location.assign('vinyl4.html');
    if(String(userinput).toLowerCase()=="we got it from here".toLowerCase()) location.assign('vinyl5.html');

  }