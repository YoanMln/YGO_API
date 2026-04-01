const API_BASE_URL = "http://127.0.0.1:8000/api";

export const fetchCards = async () => {
  try {
    const response = await fetch(`${API_BASE_URL}/cards`);

    if (!response.ok) {
      throw new Error(`Erreur API: ${response.status}`);
    }

    const result = await response.json();
    return result.data;
  } catch (error) {
    console.error("Erreur lors de la récupération:", error);
    throw error;
  }
};
