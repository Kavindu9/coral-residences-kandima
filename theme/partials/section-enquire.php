<div class="sidebar hidden lg:flex flex-col h-screen overflow-y-auto">
    <button class="close_button font-display max-w-sm text-lg font-bold leading-tight pb-20">
        <p class=" text-black text-base">
             X
        </p>
    </button>

    <div class="lg:py-8 py-10 lg:px-20 px-10 overflow-y-auto overflow-x-hidden flex-grow">
        <h1 class="font-title text-xl sm:text-2xl uppercase text-center text-black">Register Your Interest</h1>
        
        <div class="max-w-md mx-auto pt-12">
            <form class="space-y-4" action="">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" id="title"   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-slate-800 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" "  />
                    <label for="floating_email" class="font-body peer-focus:font-medium absolute text-sm text-black  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">TITLE*</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" id="fst_name"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-slate-800 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" "  />
                    <label for="floating_password" class="font-body peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">FIRST NAME*</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" id="lst_name"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-slate-800 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" "  />
                    <label for="floating_repeat_password" class="font-body peer-focus:font-medium absolute text-sm text-black  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">LAST NAME*</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" id="u_mail"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-slate-800 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" "  />
                    <label for="floating_first_name" class="font-body peer-focus:font-medium absolute text-sm text-black  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">EMAIL*</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="tel" id="tel"   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-slate-800 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" "  />
                    <label for="floating_phone" class="font-body peer-focus:font-medium absolute text-sm text-black  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CONTACT NUMBER*</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">COUNTRY OF RESIDENCE*</label><br>
                    <select id="country" data-flag="true" class="selectpicker countrypicker bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" name="country" >
                        <option value="">Choose Country</option>
                    </select> 
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" id="msg"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-slate-800 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" "  />
                    <label for="floating_company" class="font-body peer-focus:font-medium absolute text-sm text-black  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">MESSAGE</label>
                </div>
                <input type="button" onclick="sendEmail()" id="btn" class="font-body text-white bg-black hover:bg-slate-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm w-full  px-5 py-2.5 text-center " value="Submit" />
            </form>
        </div>

        <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>

        function sendEmail(){
	let title = document.getElementById("title").value;
	let fst_name = document.getElementById("fst_name").value;
	let lst_name = document.getElementById("lst_name").value;
	let u_mail = document.getElementById("u_mail").value;
	var cNo = document.getElementById("tel").value;
	var country = document.getElementById("country");
    var value = country.value;
	var msg = document.getElementById("msg").value;

	var messageBody = "Title :" + title +
	"<br /> First Name :" + fst_name +
	"<br /> Last Name :" + lst_name +
	"<br /> Email :" + u_mail +
	"<br /> Contact Number :" + cNo +
    "<br /> Country :" + value +
	"<br /> Message :" + msg ;

	
	Email.send({
		Host : "smtp.elasticemail.com",
		Username : "digital@pulseresorts.com",
		Password : "09AD36BC2A0CFFA2340E8325E5FA533F49A6",
		To : 'sales@coralresidencesmaldives.com',
		From : "digital@pulseresorts.com",
		Subject : "This is the subject",
		Body : messageBody
	}).then(
	message => alert(message)
	);
}

</script>

        
    </div>
</div>

<script>


var country_arr = new Array("Afghanistan", "Albania", "Algeria", "American Samoa", "Angola", "Anguilla", "Antartica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Ashmore and Cartier Island", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Clipperton Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo, Democratic Republic of the", "Congo, Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czeck Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Europa Island", "Falkland Islands (Islas Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern and Antarctic Lands", "Gabon", "Gambia, The", "Gaza Strip", "Georgia", "Germany", "Ghana", "Gibraltar", "Glorioso Islands", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and McDonald Islands", "Holy See (Vatican City)", "Honduras", "Hong Kong", "Howland Island", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Ireland, Northern", "Israel", "Italy", "Jamaica", "Jan Mayen", "Japan", "Jarvis Island", "Jersey", "Johnston Atoll", "Jordan", "Juan de Nova Island", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Man, Isle of", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Midway Islands", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcaim Islands", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romainia", "Russia", "Rwanda", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Scotland", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and South Sandwich Islands", "Spain", "Spratly Islands", "Sri Lanka", "Sudan", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Tobago", "Toga", "Tokelau", "Tonga", "Trinidad", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "USA", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands", "Wales", "Wallis and Futuna", "West Bank", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


function populateCountries(countryElementId, stateElementId) {
// given the id of the <select> tag as function argument, it inserts <option> tags
var countryElement = document.getElementById(countryElementId);
countryElement.length = 0;
countryElement.options[0] = new Option('Select Country', '-1');
countryElement.selectedIndex = 0;
for (var i = 0; i < country_arr.length; i++) {
    countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
}

// Assigned all countries. Now assign event listener for the states.

if (stateElementId) {
    countryElement.onchange = function () {
        populateStates(countryElementId, stateElementId);
    };
}
}



populateCountries("country", "state");
    </script>

