const fs = require('fs');
const path = require('path');

// File paths
const jsonFilePath = path.join(__dirname, 'dki-jakarta.json');
const csvFilePath = path.join(__dirname, 'dki-jakarta.csv');

// Function to convert JSON to CSV
function jsonToCsv() {
  // Read JSON file
  fs.readFile(jsonFilePath, 'utf-8', (err, data) => {
    if (err) {
      console.error('Error reading the JSON file:', err);
      return;
    }

    const jsonData = JSON.parse(data);
    let csv = 'Code,Name,Latitude,Longitude,Google Place ID\n';

    // Iterate over JSON data and build CSV rows
    jsonData.data.forEach((entry) => {
      const { code, name, coordinates, google_place_id } = entry;
      const row = `${code},${name},${coordinates.lat},${coordinates.lng},${google_place_id}\n`;
      csv += row;
    });

    // Write CSV data to file
    fs.writeFile(csvFilePath, csv, (err) => {
      if (err) {
        console.error('Error writing the CSV file:', err);
      } else {
        console.log(`CSV file successfully created: ${csvFilePath}`);
      }
    });
  });
}

// Call the function to convert JSON to CSV
jsonToCsv();

