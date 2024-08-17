<!DOCTYPE html>
<html>
<head>
    <title>Pending Posts</title>
    <link rel="stylesheet" type="text/css" href="pendingposts.css">
</head>
<body>
    <h1>Pending Posts</h1>
    <table>
        <thead>
            <tr>
                <th>Post Title</th>
                <th>Author</th>
                <th>Created</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through the pending posts and display each one -->
            <?php foreach ($pending_posts as $post) { ?>
            <tr>
                <td><?php echo $post->title; ?></td>
                <td><?php echo $post->author; ?></td>
                <td><?php echo $post->created; ?></td>
                <td><?php echo $post->status; ?></td>
                <td>
                    <!-- Add buttons to approve, reject, or edit the post -->
                    <button class="approve-btn" data-post-id="<?php echo $post->id; ?>">Approve</button>
                    <button class="reject-btn" data-post-id="<?php echo $post->id; ?>">Reject</button>
                    <button class="edit-btn" data-post-id="<?php echo $post->id; ?>">Edit</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>