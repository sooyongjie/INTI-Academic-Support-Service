const deletePrompt = (id, parentID, option) => {
  if (confirm(`Delete ${option}?`))
    if (option == "subject") {
      console.log(`Deleting ${id}`);
      window.location.href = `./func/sessions.php?delete=${id}&progID=${parentID}`;
    }
};
