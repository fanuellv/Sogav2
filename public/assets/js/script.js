function addMember() {
    const memberList = document.getElementById('member-list');
    const newMember = prompt('Digite o nome do novo membro:');
    if (newMember) {
        const listItem = document.createElement('li');
        listItem.textContent = `${newMember} (Membro)`;
        memberList.appendChild(listItem);
    }
}

function addPost() {
    const discussionBoard = document.getElementById('discussion-board');
    const newPost = document.getElementById('new-post').value;
    if (newPost) {
        const postItem = document.createElement('div');
        postItem.textContent = newPost;
        postItem.className = 'post';
        discussionBoard.appendChild(postItem);
        document.getElementById('new-post').value = '';
    }
}

function uploadFile() {
    const fileInput = document.getElementById('file-input');
    const fileList = document.getElementById('file-list');
    const file = fileInput.files[0];
    if (file) {
        const listItem = document.createElement('li');
        listItem.textContent = file.name;
        fileList.appendChild(listItem);
    }
}
