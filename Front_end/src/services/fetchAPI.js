const API_URL = "http://127.0.0.1:8000/api";

export const fetchCards = async () => {
  const response = await fetch(`${API_URL}/cards`);
  if (!response.ok) {
    throw new Error("Erreur API");
  }
  return await response.json();
};
