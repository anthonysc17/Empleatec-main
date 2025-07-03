// db.js
const mysql = require('mysql2');

// Crear una conexión con la base de datos
const connection = mysql.createConnection({
  host: 'serviciosint.com',  // Cambia esto si tu base de datos está en otro servidor
  user: 'serviciosint_user',       // Tu usuario de MySQL
  password: 'B0l54_u5e3r25',       // Tu contraseña de MySQL
  database: 'serviciosint_bddbolsaempleo' // El nombre de tu base de datos
});

// Verificar que la conexión fue exitosa
connection.connect(err => {
  if (err) {
    console.error('Error conectando a la base de datos: ' + err.stack);
    return;
  }
  console.log('Conexión exitosa a la base de datos.');
});

module.exports = connection;
