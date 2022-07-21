const formData = new FormData();

formData.append('nombre', 'Mr. michi');
formData.append('edad', '14');

fetch('server.php?color=naranja', {

    body: formData,
    method: "POST"

})
.then(res => res.text())
.then(data => {
    console.log(data);
});