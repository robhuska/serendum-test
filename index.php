<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serendum Test</title>
  <link href="dist/styles.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <div class="mx-auto max-w-7xl px-4 flex justify-center items-center h-screen">
    <button id="open-slideout" class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply for scholarship</button>
  </div>

  <!-- Slideout Panel -->
  <div id="slideout-panel" class="fixed top-0 right-0 h-full w-full max-w-3xl bg-white shadow-lg z-50 transform translate-x-full transition-transform duration-300">
    <div class="flex md:flex-row flex-col h-full">
      <div class="md:w-1/3 w-full md:h-full bg-gray-400 flex justify-center items-center p-4 relative">
        <img src="https://placehold.co/175x175/FFFFFF/000000" alt="Scholarship" class="rounded-full">
        <button id="close-slideout" class="text-white hover:text-gray-700 text-2xl absolute top-4 right-4 md:hidden">&times;</button>
      </div>

      <div class="md:w-2/3 w-full p-6 text-[rgb(37,37,37)] h-full overflow-y-auto">
        <h1 class="text-3xl font-medium mb-4">Scholarship Application Form</h1>          

        <p class="mb-4">To apply for a CIAT scholarship, please follow the steps below:</p>

        <ul class="list-disc list-outside pl-6 mb-4">
          <li class="mb-2">Review the eligibility guidelines and select from one of our available scholarships</li>
          <li class="mb-2">Complete the scholarship application form below with the required documentation for your selected scholarship.</li>
        </ul>

        <form class="mt-20" id="scholarshipForm">
          <div class="mb-8">
            <label for="name" class="block text-sm font-bold mb-2">Scholarship Type <span class="text-red-500">*</span></label>
            <select id="scholarshipType" name="scholarshipType" required="" aria-required="true" class="bg-gray-200 rounded-md p-2 w-full">
              <option value="">Choose a Scholarship</option>
              <option value="Scholarship 1">Scholarship 1</option>
              <option value="Scholarship 2">Scholarship 2</option>
              <option value="Scholarship 3">Scholarship 3</option>
              <option value="Scholarship 4">Scholarship 4</option>
              <option value="Scholarship 5">Scholarship 5</option>
              <option value="Scholarship 6">Scholarship 6</option>
              <option value="Scholarship 7">Scholarship 7</option>
            </select>
        </div>

        <div class="mb-8">
          <label for="attendedCIAT" class="block text-sm font-medium mb-2">Have you ever attended CIAT before? <span class="text-red-500">*</span></label>
          <div class="flex flex-wrap md:flex-nowrap gap-3">
            <div class="w-full h-full md:w-1/2 flex">
              <label for="no" class="custome-radio">
                <input type="radio" id="no" name="attendedCIAT" value="no">
                <span>No, I am a new student</span>
              </label>
            </div>
            <div class="w-full h-full md:w-1/2 flex">
              <label for="yes" class="custome-radio">
                <input type="radio" id="yes" name="attendedCIAT" value="yes">
                <span>Yes, I have attended CIAT before</span>
              </label>
            </div>
          </div>
        </div>

        <div class="mb-8 flex flex-wrap md:flex-nowrap gap-3">
          <div class="w-full md:w-1/2">
            <label for="firstName" class="block text-sm font-medium mb-2">First Name <span class="text-red-500">*</span></label>
            <input type="text" id="firstName" name="firstName" class="block w-full rounded-md bg-gray-200 p-2">
          </div>
          <div class="w-full md:w-1/2">
            <label for="lastName" class="block text-sm font-medium mb-2">Last Name <span class="text-red-500">*</span></label>
            <input type="text" id="lastName" name="lastName" class="block w-full rounded-md bg-gray-200 p-2">
          </div>
        </div>

        <div class="mb-8 flex flex-wrap md:flex-nowrap gap-3">
          <div class="w-full md:w-1/2">
            <label for="email" class="block text-sm font-medium mb-2">Email Address <span class="text-red-500">*</span></label>
            <input type="email" id="email" name="email" class="block w-full rounded-md bg-gray-200 p-2">
          </div>
          <div class="w-full md:w-1/2">
            <label for="phone" class="block text-sm font-medium mb-2">Phone <span class="text-red-500">*</span></label>
            <input type="tel" id="phone" name="phone" class="block w-full rounded-md bg-gray-200 p-2">
          </div>
        </div>

        <div class="mb-8 flex flex-wrap md:flex-nowrap gap-3">
          <div class="w-full md:w-1/3">
            <label for="city" class="block text-sm font-medium mb-2">City <span class="text-red-500">*</span></label>
            <input type="text" id="city" name="city" class="block w-full rounded-md bg-gray-200 p-2">
          </div>
          <div class="w-full md:w-1/3">
            <label for="state" class="block text-sm font-medium mb-2">State <span class="text-red-500">*</span></label>
            <select id="state" name="state" class="block w-full rounded-md bg-gray-200 p-2">
              <option value="">Choose a State</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="w-full md:w-1/3">
            <label for="zip" class="block text-sm font-medium mb-2">Zip Code <span class="text-red-500">*</span></label>
            <input type="text" id="zip" name="zip" class="block w-full rounded-md bg-gray-200 p-2">
          </div>
        </div>

        <div class="mb-8">
          <label for="programInterest" class="block text-sm font-medium mb-2">Choose Program Interest <span class="text-red-500">*</span></label>
          <select id="programInterest" name="programInterest" class="block w-full rounded-md bg-gray-200 p-2">
            <option value="">Select a Program Interest</option>
            <option value="Program Interest 1">Program Interest 1</option>
            <option value="Program Interest 2">Program Interest 2</option>
            <option value="Program Interest 3">Program Interest 3</option>
            <option value="Program Interest 4">Program Interest 4</option>
            <option value="Program Interest 5">Program Interest 5</option>
            <option value="Program Interest 6">Program Interest 6</option>
          </select>
        </div>

        <div class="mb-8">
          <label for="adminssionsAdvisor" class="block text-sm font-medium mb-2">Who is your Admissions Advisor? <span class="text-red-500">*</span></label>
          <select id="adminssionsAdvisor" name="adminssionsAdvisor" class="block w-full rounded-md bg-gray-200 p-2">
            <option value="">Choose an Admissions Advisor</option>
            <option value="Admissions Advisor 1">Admissions Advisor 1</option>
            <option value="Admissions Advisor 2">Admissions Advisor 2</option>
            <option value="Admissions Advisor 3">Admissions Advisor 3</option>
            <option value="Admissions Advisor 4">Admissions Advisor 4</option>
          </select>
        </div>

        <div class="mb-8">
          <label class="block text-sm font-medium mb-2">I agree that this document may be electronically signed and that the electronic signatures on this document are the same as handwritten signatures for purposes of validity, enforceability and admissibility.</label>
          <label for="agree" class="custom-checkbox">
            <input type="checkbox" id="agree" name="agree" value="yes" required>
            <span>Yes, I understand and agree</span>
          </label>
        </div>

        <div class="mb-8">
          <label class="block text-sm font-medium mb-2">By checking this box, you agree to receive SMS messages from our organization regarding our services.</label>
          <label for="recieveSMS" class="custom-checkbox">
            <input type="checkbox" id="recieveSMS" name="recieveSMS" value="yes">
            <span>I agree to receive SMS messages</span>
          </label>
        </div>

        <div class="mb-8">
          <label class="block text-sm font-medium mb-2">Signature of Student</label>
          <input type="text" id="signature" name="signature" class="block w-full rounded-md bg-gray-200 p-2">
        </div>

        <div class="mb-8">
          <label class="block text-sm font-medium mb-2">Date signed <span class="text-red-500">*</span></label>
          <input type="date" id="dateSigned" name="dateSigned" class="block w-full rounded-md bg-gray-200 p-2" required readonly value="2025-06-24" />
        </div>

        <p class="text-sm text-gray-300 mb-8">* By submitting this form, you are giving your express written consent for California Institute of Applied Technology to contact you regarding our educational programs and services using email, telephone or text – including our use of automated technology for calls and periodic texts to any wireless number you provide. Message and data rates may apply. This consent is not required to purchase goods or services and you may always call us directly at 877-559-3621. You can opt-out at any time by calling us or responding STOP to any text message.</p>

        <div>
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full w-full">Apply for scholarship</button>
        </div>
      </div>
    </div>  
  </div>

  <script src="dist/main.js"></script>
</body>
</html>