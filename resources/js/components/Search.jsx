import React, { useState } from "react";
import { useNavigate } from "react-router-dom";

const Search = () => {
  const [search, setSearch] = useState("");
  const navigate = useNavigate();

  const handleSearch = (e) => {
    e.preventDefault();

    if (!search.trim()) return;

    navigate(`/search/${encodeURIComponent(search)}`);
    setSearch("");
  };

  return (
    <form onSubmit={handleSearch} className="flex items-center border-2 border-gray-400 rounded-sm">
      <input
        type="search"
        value={search}
        onChange={(e) => setSearch(e.target.value)}
        placeholder="Search..."
        className="pl-2 outline-none"
      />
      <button type="submit">
        🔍
      </button>
    </form>
  );
};

export default Search;