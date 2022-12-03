fetch("http://compute.dinus.ac.id:900/api/get/ssensor")
  // Converting received data to JSON
  .then((response) => response.json())
  .then((json) => {
    
  // 2. Create a variable to store HTML table headers
    //let li = `<tr><th>ID</th><th>Name</th><th>User Name</th><th>Email</th> <th>Phone</th><th>Website</th></tr>`;
    let li = ''
    // 3. Loop through each data and add a table row
    let i = 1;
    
    json.slice(-7).forEach((user) => {
      li += `<tr align="left">
        <td>${i++}</td>
        <td>${user.id_iot}</td>
        <td>${user.alamat} </td>
        <td>${user.datakecepatanangin}</td>
        <td>${user.datasuhuudara}</td>
        <td>${user.datakelembabanudara}</td>
        <td>${user.dataphtanah}</td>
        <td>${user.datakelembabantanah}</td>
        <td>${user.datasuhutanah}</td>
        <td>${user.statusalat}</td>
        <td>${user.tanggal}</td>
      </tr>`;
    });

    // 4. DOM Display result
    document.getElementById("tabel").innerHTML = li;
  });
