/**
 * frontend.js
 *
 * JavaScript für das Frontend des UD Blank Blocks.
 * Diese Datei wird nur auf der Website (nicht im Editor) geladen.
 *
 * Hinweis:
 * Hier können zukünftig Interaktionen, Animationen oder API-Aufrufe
 * für den Block ergänzt werden.
 */

document.addEventListener("DOMContentLoaded", () => {
	const blocks = document.querySelectorAll(".wp-block-ud-blank-block");
	if (!blocks.length) return;

	blocks.forEach((block) => {
		// Beispiel: einfache Konsolenmeldung zur Verifizierung
		console.log("UD Blank Block gefunden:", block);

		// Platz für spätere Logik:
		// - Fetch-Daten laden
		// - Animationen starten
		// - Event-Listener registrieren
	});
});
