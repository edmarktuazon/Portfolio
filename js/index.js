/** @format */
const cert = document.querySelector("#cert");

const certOnclick = (e) => {
	e.preventDefault();
	window.alert("Certificate for 1st runner up is not available yet");
};
cert.addEventListener("click", certOnclick);
