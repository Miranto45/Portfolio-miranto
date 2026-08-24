<!DOCTYPE html>
<html lang="fr">
<body style="font-family:Arial,Helvetica,sans-serif;background:#ffffff;color:#111111;padding:24px">
    <h2 style="border-bottom:2px solid #111;padding-bottom:8px">Nouveau message depuis le portfolio</h2>
    <p><strong>Nom :</strong> {{ $d['name'] }}</p>
    <p><strong>Email :</strong> {{ $d['email'] }}</p>
    <p><strong>Sujet :</strong> {{ $d['subject'] ?: '(aucun)' }}</p>
    <p><strong>Message :</strong></p>
    <p style="white-space:pre-line;border-left:3px solid #111;padding-left:12px">{{ $d['message'] }}</p>
</body>
</html>
