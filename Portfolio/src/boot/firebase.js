import { initializeApp } from "firebase/app";
import { getFirestore, collection, addDoc } from "firebase/firestore";

const firebaseConfig = {
  apiKey: "AIzaSyD_aL6v1h2HnqIPG9u_QkMdj1UAZZrPVHs",
  authDomain: "toitamura-portfolio.firebaseapp.com",
  projectId: "toitamura-portfolio",
  storageBucket: "toitamura-portfolio.firebasestorage.app",
  messagingSenderId: "885870431768",
  appId: "1:885870431768:web:66ada5045736ac47c07d6d",
  measurementId: "G-KFD6DBX4Y1"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

export { db };
