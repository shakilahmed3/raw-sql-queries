function insertData() {
    const Name = document.getElementById("name").value;
    const Roll = document.getElementById("roll").value;
    const Class = document.getElementById("class").value;

    const url = "/insertdata";
    const data = { name: Name, roll: Roll, class: Class };


    axios.post(url, data)
        .then(function (response) {
            alert(response.data)
        })
        .catch(function (error) {
            alert(error.data);
        });
}


function deleteData() {
    const myId = document.getElementById("myId").value

    axios.post('/deleteData', {
        id: myId
    })
        .then(function (response) {
            alert(response.data)
        })
        .catch(function (error) {
            alert(error.data);
        });

}


function updateData(){
    const id = document.getElementById("id").value;
    const Name = document.getElementById("name").value;
    const Roll = document.getElementById("roll").value;
    const Class = document.getElementById("class").value;

    const url = "/updateData";
    const data = { id:id, name: Name, roll: Roll, class: Class };


    axios.post(url, data)
        .then(function (response) {
            alert(response.data)
        })
        .catch(function (error) {
            alert(error.data);
        });
}
