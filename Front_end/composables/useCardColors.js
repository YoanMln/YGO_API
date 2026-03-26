import { cardColors } from "@/utils/cardColors";

export const useCardColor = () => {
  const getCardColor = (card) => {
    if (!card?.type?.name) return "#cccccc";

    if (card.type.name === "Magie") {
      return cardColors["Magie"];
    }

    if (card.type.name === "Piège") {
      return cardColors["Piège"];
    }

    if (card.type.name === "Monstre") {
      if (card.monster_secondary_type?.name === "Fusion") {
        return cardColors["Fusion"];
      }
      if (card.monster_secondary_type?.name === "Xyz") {
        return cardColors["Xyz"];
      }
      if (card.monster_secondary_type?.name === "Lien") {
        return cardColors["Lien"];
      }

      if (card.monster_primary_type?.name === "Effet") {
        return cardColors["Effet"];
      }

      return cardColors["Monstre"];
    }

    return "#cccccc";
  };

  return { getCardColor };
};