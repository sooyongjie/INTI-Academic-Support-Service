const firebaseInit = () => {
  var firebaseConfig = {
    apiKey: "AIzaSyC7QNOoWrjPJ7rfG8Ef6oTCORmcLkWB4LA",
    authDomain: "inti-academic-support.firebaseapp.com",
    projectId: "inti-academic-support",
    storageBucket: "inti-academic-support.appspot.com",
    messagingSenderId: "612879520507",
    appId: "1:612879520507:web:d32eab4644b4e7968ed65e",
    measurementId: "G-NL0ZCBHVC3",
  };
  firebase.initializeApp(firebaseConfig);
};

firebaseInit();
var storage = firebase.app().storage("gs://inti-academic-support.appspot.com");
var storageRef = storage.ref();
