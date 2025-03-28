<?php
// 1. Connect to MongoDB
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

// Select database
$database = $mongoClient->test_db; // Change 'test_db' to your database name

// Select collection
$collection = $database->users; // Change 'users' to your collection name

// 2. Insert Document
$insertResult = $collection->insertOne([
    'name' => 'John Doe',
    'email' => 'john@example.com'
]);
echo "Inserted document with ID: " . $insertResult->getInsertedId() . "\n";

// 3. Fetching Data (Find)
$cursor = $collection->find([]);
foreach ($cursor as $document) {
    echo "ID: " . $document['_id'] . " | Name: " . $document['name'] . " | Email: " . $document['email'] . "\n";
}

// 4. Updating a Document
$updateResult = $collection->updateOne(
    ['name' => 'John Doe'], // Filter
    ['$set' => ['name' => 'Jane Doe']] // Update
);
echo "Matched " . $updateResult->getMatchedCount() . " document(s) and modified " . $updateResult->getModifiedCount() . " document(s)\n";

// 5. Deleting a Document
$deleteResult = $collection->deleteOne(['name' => 'Jane Doe']);
echo "Deleted " . $deleteResult->getDeletedCount() . " document(s)\n";

// 6. Closing Connection (MongoDB connection is automatically managed)
?>
