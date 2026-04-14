const API_BASE_URL = "http://127.0.0.1:8000/api";

export const fetchCards = async (page = 1, filters = {}) => {
  const cleanFilters = Object.fromEntries(
    Object.entries(filters).filter(([_, v]) => v !== undefined && v !== null && v !== "")
  );

  const params = new URLSearchParams({ page, ...cleanFilters });

  try {
    const response = await fetch(`${API_BASE_URL}/cards?${params}`);

    if (!response.ok) {
      throw new Error(`Erreur API: ${response.status}`);
    }

    const result = await response.json();
    return {
      data: result.data,
      meta: result.meta,
      links: result.links,
    };
  } catch (error) {
    console.error("Erreur lors de la récupération:", error);
    throw error;
  }
};
