const deletePrompt = (id, parentID, option) => {
  if (confirm(`Delete ${option}?`))
    if (option == "subject") {
      window.location.href = `./func/sessions.php?delete=${id}&progID=${parentID}`;
    } else if (option == "session") {
      window.location.href = `./func/subjects.php?delete=${id}&progID=${parentID}`;
    }
};
