composer require kreait/laravel-firebase
require_once __DIR__.'/firebase-php/firebase.php';
require_once __DIR__.'/firebase-php/push.php';

$firebase = new Firebase();
FIREBASE_DATABASE_URL=https://old-mobiles-new.firebaseapp.com
  
  <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCco_5Qd74plhixTH7H9Pb-g47OGjHlh4k",
    authDomain: "old-mobiles-new.firebaseapp.com",
    projectId: "old-mobiles-new",
    storageBucket: "old-mobiles-new.appspot.com",
    messagingSenderId: "154431580346",
    appId: "1:154431580346:web:0570eab96f575e60773a83",
    measurementId: "G-35PLFCYF8B"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

$firebase = new Firebase();
// Generate a new OTP
$otp = rand(100000, 999999);

// Send the OTP to the user via SMS
$firebase->send([
    'to' => '+917014291434', // Phone number of the user
    'message' => 'Your OTP is '.$otp.'. It is valid for 5 minutes.'
]);
