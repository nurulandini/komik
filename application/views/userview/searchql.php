<?php

function search($term)
{
	$format = 'json';
	$query =
	"
	PREFIX dbr: <http://dbpedia.org/resource/>
	PREFIX dbo: <http://dbpedia.org/ontology/>
	PREFIX dbpedia2: <http://dbpedia.org/property/>


	SELECT ?Id ?Gambar ?Title WHERE {
	?Judul a dbo:Manga .
	?Judul dbo:wikiPageID ?Id .
	?Judul dbo:thumbnail ?Gambar .
	?Judul rdfs:label ?Title .
	?Judul dbpedia2:genre ?Aliran .
	?Aliran rdfs:label ?Genre .
	?Judul dbo:author ?penulis .
	?penulis rdfs:label ?Author .
	?Judul dbo:abstract ?Synopsis .
	FILTER (lang(?Title)='en') .
	FILTER (lang(?Genre)='en') .
	FILTER (lang(?Author)='en') .
	FILTER (lang(?Synopsis)='en') .
	FILTER regex(?Title,'".$term."', 'i')
	}";

	$searchUrl = 'http://dbpedia.org/sparql?'
	.'query='.urlencode($query)
	.'&format='.$format;

	return $searchUrl;
}

include 'a.php';

$term='';

?>