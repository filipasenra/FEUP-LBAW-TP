<?php

$link_profile = ($comment->publication->owner) ? $comment->publication->owner->url : null;

$optionForCommentForAnswer = "";
$questionTitle = "";

if ($comment->commentsResponse->count() > 0) {
    $optionForCommentForAnswer = " uma resposta ";
    $questionTitle = $comment->commentsResponse->question->title;

} else {
    $questionTitle = $comment->commentsQuestion->title;
}

?>

<div class="activity py-4 px-4 border-top">
    @include('partials.header_activity', ['memberId' => $comment->publication->id_owner, 'name' => $comment->publication->owner->name, "link_profile" => $link_profile, 'action' => "comentou " . $optionForCommentForAnswer . "em ", 'actionInBold' => $questionTitle, "date" => $comment->publication->date])

    <p class="card-text">{{ $comment->publication->description }}</p>
</div>