<?php
session_start();

// // Redirect to dashboard if already logged in
// if (isset($_SESSION['user_id'])) {
//     header("Location: dashboard.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Drug Recommendation System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="static\css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

</head>
<body>
    <div class="background-animation"></div>
    
    <!-- Navigation -->
    <nav class="nav-bar">
        <div class="logo animate__animated animate__fadeIn"><h2>DrugGenius</h2></div>
        <div class="nav-links">
            <button id="homeNavBtn" class="nav-btn">Home</button>
            <button id="loginNavBtn" class="nav-btn">Login</button>
            <button id="registerNavBtn" class="nav-btn">Register</button>
            <button id="contactNavBtn" class="nav-btn">Contact</button>
        </div>
    </nav>

    <!-- Add this inside your Contact section -->




   
    <!-- Homepage Section -->
    <section id="homepage" class="homepage-section animate__animated animate__fadeIn">
        <div class="homepage-content">
            <h1 class="animate__animated animate__fadeInDown">Welcome to <span class="highlight">DrugGenius</span></h1>
            <p class="description animate__animated animate__fadeIn">DrugGenius is an intelligent platform that provides personalized drug recommendations using advanced data-driven techniques.</p>
            
            <h2 class="animate__animated animate__fadeInUp">About the <span class="highlight">Decision Tree Algorithm</span></h2>
            <p class="info animate__animated animate__fadeIn">The Decision Tree Algorithm splits data into branches, representing possible decision paths. It helps us identify the most likely illness and suggest suitable medications. This method ensures accurate, efficient recommendations tailored to individual needs.</p>
    
            <a href="https://www.geeksforgeeks.org/decision-tree-algorithms/"><button id="decisionTreeBtn" class="submit-btn">Learn More</button></a>

            <h2 class="animate__animated animate__fadeInUp">How Our Drug Detection System Works</h2>
            <p class="info animate__animated animate__fadeIn">Our system cross-references patient symptoms with a vast database of medications and medical conditions. It takes into account potential allergies, chronic conditions, and other patient-specific factors to suggest safe and effective drugs.</p>
            
            <h3 class="highlight animate__animated animate__fadeInUp">Why Choose DrugGenius?</h3>
            <ul class="benefits-list animate__animated animate__fadeIn">
                <li>Accurate, data-driven recommendations based on symptoms and conditions.</li>
                <li>Personalized suggestions, including allergy and chronic condition considerations.</li>
                <li>Easy-to-use interface with quick and reliable recommendations.</li>
            </ul>


            <h1>Train Your AI Models</h1>
    
            <h2>Random Forest Classifier</h2>
            <form>
                <button id="train-rf-btn" class="submit-btn">Train AI Model 1</button>
                <div id="trainModelMessage" style="margin-top: 20px; color: green;"></div>
            </form>
            <div id="rf-status-update"></div>
    
            <br><br>
    
            <h2>Decision Tree Classifier</h2>
            <form>
                <button id="train-dt-btn" class="submit-btn">Train AI Model 2</button>
                <div id="trainModelMessage" style="margin-top: 20px; color: green;"></div>
            </form>
            <div id="dt-status-update"></div>

<!-- 
            <form action="/train_model" method="post">
            <button id="trainModelBtn" class="submit-btn">Train AI Model</button>
            <div id="trainModelMessage" style="margin-top: 20px; color: green;"></div>
            </form>
            <div id="status-update"></div> -->
    
            <br><br><br><br><br><br>
                <h4 class="contact-title animate__animated animate__fadeInUp">Contact Us:</h4>
                <div class="contact-icons">
                    <a href="https://www.instagram.com/shankar_gojo_01000101/"><i class="fa-brands fa-instagram fa-xl"></i></a> 
                    <a href="mailto:shankarpaikira225@gmail.com"><i class="fa-brands fa-google fa-xl"></i></a>
                    <a href="https://www.facebook.com/sadhana.rani.3954"> <i class="fa-brands fa-facebook fa-xl"></i></a>
                    <a href="https://x.com/sha54773">  <i class="fa-brands fa-square-x-twitter fa-xl"></i></a>
                </div>
        </div>
    </section>
    

    <!-- Contact Page Section -->
    <section id="contact-page" class="contact-section animate__animated animate__fadeIn hidden">
        <div class="contact-content">
            <h1 class="animate__animated animate__fadeInDown">Contact Us</h1>
            <p class="animate__animated animate__fadeIn">We'd love to hear from you! Please reach out with any questions, feedback, or support inquiries.</p>
    
            <div class="contact-icons">
                    <a href="https://www.instagram.com/shankar_gojo_01000101/"><i class="fa-brands fa-instagram fa-xl"></i></a> 
                    <a href="mailto:shankarpaikira225@gmail.com"><i class="fa-brands fa-google fa-xl"></i></a>
                    <a href="https://www.facebook.com/sadhana.rani.3954"> <i class="fa-brands fa-facebook fa-xl"></i></a>
                    <a href="https://x.com/sha54773">  <i class="fa-brands fa-square-x-twitter fa-xl"></i></a>
            </div>
    
            <form id="contactForm" class="contact-form animate__animated animate__fadeInUp">
              
                

                <div class="form-group">
                    <input type="text" id="contactName" name="contactName" required>
                    <label for="contactName">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="contactEmail" name="contactEmail" required>
                    <label for="contactEmail">Email</label>
                </div>
                <div class="form-group">
                    <input type="text" id="contactMessage" name="contactMessage" rows="4" required>
                    <label for="contactMessage">Message</label>
                </div>
                <button type="submit" class="submit-btn">
                    <span>Send Message</span>
                    <div class="ripple"></div>
                </button>
            </form>
        </div>
    </section>
    

  

    <!-- Login Page -->
    <div id="login-page" class="auth-container animate__animated animate__fadeIn">
        <div class="auth-box">
            <h2>Welcome Back</h2>
            <form action="login.php" method="POST" id="loginForm" class="auth-form" >

                <div class="form-group">
                    <input type="text" id="loginUsername" name="username" required>
                    <label>Username</label>
                </div>
                <div class="form-group">
                    <input type="password" id="loginPassword" name="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="submit-btn">
                    <span>Login</span>
                    <div class="ripple"></div>
                </button>
                <p class="switch-form">New user? <a href="#" id="showRegister">Create account</a></p>
            </form>
        </div>
    </div>

    <!-- Registration Page -->
    <div id="register-page" class="auth-container animate__animated animate__fadeIn hidden">
        <div class="auth-box">
            <h2>Create Account</h2>
            <form  action="register.php" method="POST" id="registerForm" class="auth-form">

                <div class="form-group">
                    <input type="text" id="registerUsername" name="username" required>
                    <label>Username</label>
                </div>
                <div class="form-group">
                    <input type="email" id="registerEmail"  name="email" required>
                    <label>Email</label>
                </div>
                <div class="form-group">
                    <input type="password" id="registerPassword" name="password" required>
                    <label>Password</label>
                </div>
                <div class="form-group">
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                    <label>Confirm Password</label>
                </div>
                <button type="submit" class="submit-btn">
                    <span>Register</span>
                    <div class="ripple"></div>
                </button>
                <p class="switch-form">Already have an account? <a href="#" id="showLogin">Login</a></p>
            </form>
        </div>
    </div>

    <!-- Drug Recommendation Form -->
    <div id="recommendation-page" class="container animate__animated animate__fadeIn hidden">
        <h1 class="heading">Drug Recommendation System</h1> <!-- Custom heading class added -->
        <form id="symptomForm">
            <!-- Common Symptoms Section -->
            <div class="symptoms-section">
                <h3>Common Symptoms</h3>
                <div class="symptom-grid">
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="fever">
                        <span class="checkmark"></span>
                        Fever
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="headache">
                        <span class="checkmark"></span>
                        Headache
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="muscle_aches">
                        <span class="checkmark"></span>
                        Muscle Aches
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="joint_pain">
                        <span class="checkmark"></span>
                        Joint Pain
                    </label>
                </div>
            </div>

            <!-- Respiratory Symptoms Section -->
            <div class="symptoms-section">
                <h3>Respiratory Symptoms</h3>
                <div class="symptom-grid">
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="runny_nose">
                        <span class="checkmark"></span>
                        Runny Nose
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="sneezing">
                        <span class="checkmark"></span>
                        Sneezing
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="shortness_of_breath">
                        <span class="checkmark"></span>
                        Shortness of Breath
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="wheezing">
                        <span class="checkmark"></span>
                        Wheezing
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="asthma">
                        <span class="checkmark"></span>
                        Asthma
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="sinus_infection">
                        <span class="checkmark"></span>
                        Sinus Infection
                    </label>
                </div>
            </div>

            <!-- Digestive Symptoms Section -->
            <div class="symptoms-section">
                <h3>Digestive Symptoms</h3>
                <div class="symptom-grid">
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="heartburn">
                        <span class="checkmark"></span>
                        Heartburn
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="acid_reflux">
                        <span class="checkmark"></span>
                        Acid Reflux
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="stomach_pain">
                        <span class="checkmark"></span>
                        Stomach Pain
                    </label>
                </div>
            </div>

            <!-- Chronic Conditions Section -->
            <div class="symptoms-section">
                <h3>Chronic Conditions</h3>
                <div class="symptom-grid">
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="high_blood_pressure">
                        <span class="checkmark"></span>
                        High Blood Pressure
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="type_2_diabetes">
                        <span class="checkmark"></span>
                        Type 2 Diabetes
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="hypothyroidism">
                        <span class="checkmark"></span>
                        Hypothyroidism
                    </label>
                </div>
            </div>

            <!-- Mental Health Section -->
            <div class="symptoms-section">
                <h3>Mental Health</h3>
                <div class="symptom-grid">
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="depression">
                        <span class="checkmark"></span>
                        Depression
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="anxiety">
                        <span class="checkmark"></span>
                        Anxiety
                    </label>
                </div>
            </div>

            <!-- Other Symptoms Section -->
            <div class="symptoms-section">
                <h3>Other Symptoms</h3>
                <div class="symptom-grid">
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="itchy_eyes">
                        <span class="checkmark"></span>
                        Itchy Eyes
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="bacterial_infection">
                        <span class="checkmark"></span>
                        Bacterial Infection
                    </label>
                    <label class="animate__animated animate__fadeInUp">
                        <input type="checkbox" name="sore_throat">
                        <span class="checkmark"></span>
                        Sore Throat
                    </label>
                </div>
            </div>

            <!-- Additional Symptoms Section -->
<div class="symptoms-section">
    <h3>Additional Symptoms</h3>
    <div class="symptom-grid">
        <!-- Add new symptoms here -->
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="fatigue">
            <span class="checkmark"></span>
            Fatigue
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="dizziness">
            <span class="checkmark"></span>
            Dizziness
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="nausea">
            <span class="checkmark"></span>
            Nausea
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="vomiting">
            <span class="checkmark"></span>
            Vomiting
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="blurred_vision">
            <span class="checkmark"></span>
            Blurred Vision
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="chest_pain">
            <span class="checkmark"></span>
            Chest Pain
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="palpitations">
            <span class="checkmark"></span>
            Palpitations
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="sweating">
            <span class="checkmark"></span>
            Sweating
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="dry_mouth">
            <span class="checkmark"></span>
            Dry Mouth
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="difficulty_swallowing">
            <span class="checkmark"></span>
            Difficulty Swallowing
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="insomnia">
            <span class="checkmark"></span>
            Insomnia
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="hair_loss">
            <span class="checkmark"></span>
            Hair Loss
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="skin_rash">
            <span class="checkmark"></span>
            Skin Rash
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="constipation">
            <span class="checkmark"></span>
            Constipation
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="diarrhea">
            <span class="checkmark"></span>
            Diarrhea
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="loss_of_appetite">
            <span class="checkmark"></span>
            Loss of Appetite
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="weight_loss">
            <span class="checkmark"></span>
            Weight Loss
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="frequent_urination">
            <span class="checkmark"></span>
            Frequent Urination
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="back_pain">
            <span class="checkmark"></span>
            Back Pain
        </label>
        <label class="animate__animated animate__fadeInUp">
            <input type="checkbox" name="cold_intolerance">
            <span class="checkmark"></span>
            Cold Intolerance
        </label>
    </div>
</div>


            <!-- Additional Information Section -->
            <div class="patient-info-container">
                <h3 class="form-title">Patient Information</h3>
                <div class="patient-form">
                    <div class="form-row">
                        <div class="form-field">
                            <label for="age" class="field-label">Age</label>
                            <input 
                                type="number" 
                                id="age" 
                                name="age" 
                                min="0" 
                                max="120" 
                                class="field-input"
                                placeholder="Enter age"
                                required
                            >
                        </div>
                        <div class="form-field">
                            <label for="sex" class="field-label">Sex</label>
                            <select id="sex" name="sex" class="field-input" required>
                                <option value="" disabled selected>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-field">
                            <label for="bp" class="field-label">Blood Pressure</label>
                            <input 
                                type="text" 
                                id="bp" 
                                name="bp" 
                                class="field-input"
                                placeholder="e.g., 120/80"
                                pattern="\d{2,3}\/\d{2,3}"
                                title="Please enter blood pressure in format: 120/80"
                                required
                            >
                        </div>
                        <div class="form-field">
                            <label for="temperature" class="field-label">Temperature (°C)</label>
                            <input 
                                type="number" 
                                id="temperature" 
                                name="temperature" 
                                class="field-input"
                                step="0.1" 
                                min="35" 
                                max="42"
                                placeholder="Enter temperature"
                                required
                            >
                        </div>
                    </div>
                </div>
            </div>

            <center>
            <button type="submit" class="submit-btn">
                
                <span>Get Recommendation</span>
                <div class="ripple"></div>
               
            </button>
            </center>
        </form>

        <!-- Results Section -->
        <div id="result" class="hidden">
            <h2>Recommendation</h2>
            <div id="recommendation"></div>
        </div>
    </div>

  
    <script src="static\js\script2.js"></script> 

</body>
</html>

